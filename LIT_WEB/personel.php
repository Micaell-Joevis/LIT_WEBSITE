<?php include_once('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personel</title>
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

        .personel-container {
            height: auto;
            display: flex;
            flex-direction: column;
        }

        .personel-header {
            border: none;
            height: 670px;
            width: inherit;
            display: flex;
            align-items: center;
            justify-content: center;
            background: url('../images/weldinglogo2.png');
            background-position: center;
            background-repeat: no-repeat;
        }

        .personel-header h1 {
            padding: 20px 40px;
            font-size: 65px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: normal;
            letter-spacing: 1px;
            color: #e8e8e8ff;
            text-align: center;
            text-shadow: 0 0 10px #000000f2;
        }

        .personel-context {
            height: inherit;
            width: 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .personel-context .personel-card {
            padding: 20px;
            height: auto;
            width: inherit;
        }
    </style>
</head>

<body>
    <div class="personel-container">
        <div class="personel-header">
            <h1>LASAM INSTITUTE <br> OF TECHNOLOGY: PERSONEL</h1>
        </div>
        <div class="personel-context">
            <div class="personel-card">
                <p></p>
            </div>
        </div>
    </div>
</body>

</html>
<?php include_once('footer.php'); ?>