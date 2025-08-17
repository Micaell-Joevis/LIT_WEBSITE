<?php include_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competency Assessment</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            width: 100%;
            background: #f1f1f1ff;
            height: auto;
            margin: 70px 0 0 0;
        }

        .competency-container {
            border: none;
            height: auto;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .competency-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: url('../images/weldinglogo2.png');
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            height: 670px;
            width: inherit;
            padding: 20px;
        }

        .competency-header h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 54px;
            color: #f1f1f1ff;
            text-shadow: 0 0 10px rgba(1, 1, 1, .5);
        }

        .competency-context {
            height: auto;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px 20px 40px 20px;
        }

        .competency-context h3 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: xx-large;
            color: #163791;
            text-align: center;
            padding: 20px 10px;
        }

        .competency-card {
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: column;
            align-items: start;
            padding: 20px 40px;
        }

        .competency-context .competency-card h3 {
            font-size: xx-large;
            letter-spacing: 1px;
        }

        .competency-card h4 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: x-large;
            letter-spacing: 1px;
            font-weight: normal;
        }
    </style>
</head>

<body>
    <div class="competency-container">
        <div class="competency-header">
            <h1>LASAM INSTITUTE <br>OF TECHNOLOGY:COMPETENCY ASSSESSMENT <br>AND CERTIFICATION</h1>
        </div>
        <div class="competency-context">
            <h3>COMPETENCY ASSESSMENT AND CERTIFICATION</h3>
            <div class="competency-card">
                <h3>AC VISION</h3>
                <h4>A premier Assessment Center that unlucks candidate's full potential.</h4>
            </div>
            <div class="competency-card">
                <h3>AC MISSION</h3>
                <h4>To actively contribute to the upliftment of local enconomy by producing certified workers who are self-reliant, globally competitive, and with desirable work values.</h4>
            </div>
        </div>
    </div>
</body>

</html>
<?php include_once('footer.php');
