<?php include_once('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Center</title>

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            width: 100%;
            height: auto;
            background: #f1f1f1ff;
            margin-top: 70px;
        }

        .assessment-container {
            height: auto;
            display: flex;
            flex-direction: column;
        }

        .assessment-header {
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

        .assessment-header h1 {
            padding: 20px 40px;
            font-size: 65px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: normal;
            letter-spacing: 1px;
            color: #e8e8e8ff;
            text-align: center;
            text-shadow: 0 0 10px #000000f2;
        }

        .assessment-context {
            height: inherit;
            width: 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .assessment-card {
            height: auto;
            width: inherit;
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .assessment-card-objectives {
            padding: 20px 20px 20px 45px;
            margin: 20px 20px 20px 0;
            max-width: 100%;
            min-height: auto;
            display: flex;
            align-items: center;
        }

        .assessment-card .vision,
        .mission {
            padding: 20px;
            width: 40%;
            min-height: 150px;
            margin: 20px;
            display: flex;
            flex-grow: 1;
            flex-basis: 400px;
            flex-direction: column;
        }

        .objectives {
            max-width: 100%;
            height: auto;
            padding: 20px 20px 20px 0;
            display: flex;
            flex-grow: 1;
            flex-basis: 400px;
            flex-direction: column;
        }

        .objectives ul {
            padding-left: 20px;
        }

        .objectives ul li {
            font-family: Arial, Helvetica, sans-serif;
            font-size: large;
            letter-spacing: 1px;
            line-height: 35px;
        }

        .mission h3,
        .vision h3,
        .objectives h3 {
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 1px;
            font-size: x-large;
            color: #163791;
            font-weight: 600;
            padding-bottom: 10px;
        }

        .vision h4,
        .mission h4 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: larger;
            font-weight: normal;
            letter-spacing: 1px;
            line-height: 35px;
        }
    </style>
</head>

<body>
    <div class="assessment-container">
        <div class="assessment-header">
            <h1>LASAM INSTITUTE <br>OF TECHNOLOGY: ASSESSMENT CENTER</h1>
        </div>
        <div class="assessment-context">
            <div class="assessment-card">
                <div class="vision">
                    <h3>VISION</h3>
                    <H4>A premier Assessment Center that unlocks candidate's full potential.</H4>
                </div>
                <div class="mission">
                    <h3>MISSION</h3>
                    <H4>To actively contribute to the upliftment of local economy by producing certified workers who are self-reliant, globally competitive, and with desirable work values.</H4>
                </div>
            </div>
            <div class="assessment-card">
                <div class="vision">
                    <h3>GOAL</h3>
                    <H4>Enhance the quality of the Assessment Center by providing updated tools and equipment based on AC standard requirement.</H4>
                </div>
                <div class="mission">
                    <h3>QUALITY POLICY</h3>
                    <H4>Good Services Begets Satisfied Customers.</H4>
                </div>
            </div>
            <div class="assessment-card-objectives">
                <div class="objectives">
                    <h3>OBJECTIVES:</h3>
                    <ul>
                        <li>Compliance with assessment operating procedures.</li>
                        <li>Register additional assessment center.</li>
                        <li>Upgrade tools, equipment and facilities to keep abreast with the fast-changing technology.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
<?php include_once('footer.php'); ?>