<?php
// login.php
session_start();
header('Content-Type: application/json');
require_once 'config.php';

$data = json_decode(file_get_contents('php://input'), true);
$response = ["success" => false, "message" => ""];

if(empty($data['email']) || empty($data['password'])) {
    $response["message"] = "Please enter email and password.";
    echo json_encode($response); exit;
}

try {
    // Validate and sanitize email
    $email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);
    if (!$email) {
        $response["message"] = "Invalid email format.";
        echo json_encode($response); exit;
    }
    
    // Use proper shell escaping for the email parameter
    $sql = "SELECT id, password_hash, role FROM examination_users WHERE email = " . escapeshellarg($email);
    
    // Try using mysql client directly (works from host browser)
    $command = sprintf(
        'mysql -h 127.0.0.1 -u root dbexamination -e %s --batch --skip-column-names 2>&1',
        escapeshellarg($sql)
    );
    
    exec($command, $output, $return_code);
    
    // If mysql client fails, try docker exec (works in dev container)
    if ($return_code !== 0) {
        $output = [];
        $command = sprintf(
            'docker exec mysql-exam-db mysql -u root dbexamination -e %s --batch --skip-column-names 2>&1',
            escapeshellarg($sql)
        );
        exec($command, $output, $return_code);
    }
    
    if ($return_code !== 0) {
        $response["message"] = "Database error. Please try again.";
        error_log("Login DB error (code $return_code): " . implode("\n", $output));
        error_log("Command: $command");
        error_log("SQL: $sql");
        echo json_encode($response); exit;
    }
    
    if (empty($output) || empty($output[0])) {
        $response["message"] = "User or email address not found.";
        echo json_encode($response); exit;
    }
    
    $parts = explode("\t", $output[0]);
    if (count($parts) < 3) {
        $response["message"] = "Invalid user data.";
        error_log("Invalid parts count: " . count($parts) . ", data: " . $output[0]);
        echo json_encode($response); exit;
    }
    
    $user = [
        'id' => $parts[0],
        'password_hash' => $parts[1],
        'role' => $parts[2]
    ];
    
    if(!password_verify($data['password'], $user['password_hash'])) {
        $response["message"] = "Password is incorrect.";
        echo json_encode($response); exit;
    }
    
    // Set session variables
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['email'] = $email;
    
    $response["success"] = true;
    $response["message"] = "Login successful!";
    $response["role"] = $user['role'];
} catch(Exception $e) {
    $response["message"] = "Login failed: " . $e->getMessage();
    error_log("Login exception: " . $e->getMessage());
}
echo json_encode($response);
