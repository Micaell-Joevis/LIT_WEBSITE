<?php include_once('header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission and Vision</title>
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

        .visionMission-container {
            height: auto;
            display: flex;
            flex-direction: column;
        }

        .visionMission-header {
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

        .visionMission-header h1 {
            padding: 20px 40px;
            font-size: 65px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: normal;
            letter-spacing: 1px;
            color: #e8e8e8ff;
            text-align: center;
            text-shadow: 0 0 10px #000000f2;
        }

        .visionMission-context {
            height: inherit;
            width: 100%;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .visionMission-card {
            height: auto;
            width: inherit;
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
        }

        .visionMission-card .vision,
        .mission {
            padding: 30px;
            width: 100%;
            min-height: 100px;
            border-bottom: none;
            display: flex;
            flex-grow: 1;
            flex-direction: column;
        }

        .visionMission-card-objectives {
            max-width: 100%;
            height: auto;
            display: flex;
            flex-direction: column;
            display: flex;
            flex-grow: 1;
            align-items: start;
            justify-content: center;
        }

        .visionMission-objectives {
            max-width: 100%;
            height: auto;
            display: flex;
            flex-direction: column;
            padding: 10px 30px 30px 30px;
        }

        .visionMission-objectives * {
            width: 100%;
        }

        .visionMission-card-objectives h3 {
            text-align: center;
            padding: 20px 30px 0px 30px;
        }

        .visionMission-objectives ul {
            max-width: 100%;
            list-style: square;
            padding-left: 20px;
            min-height: auto;
        }

        .visionMission-objectives ul li {
            font-family: Arial, Helvetica, sans-serif;
            font-size: large;
            letter-spacing: 1px;
            line-height: 35px;
        }

        .mission h3,
        .vision h3,
        .visionMission-card-objectives h3 {
            padding-bottom: 20px;
            font-family: Arial, Helvetica, sans-serif;
            letter-spacing: 1px;
            font-size: x-large;
            color: #163791;
            font-weight: 600;
        }

        .vision h4,
        .mission h4,
        .visionMission-objectives h4 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: larger;
            font-weight: normal;
            letter-spacing: 1px;
            line-height: 30px;
        }

        .visionMission-objectives span {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="visionMission-container">
        <div class="visionMission-header">
            <h1>LASAM INSTITUTE <br>OF TECHNOLOGY: MISSION AND VISION</h1>
        </div>
        <div class="visionMission-context">
            <div class="visionMission-card">
                <div class="vision">
                    <h3>VISION</h3>
                    <H4>To become a Polytechnic Institute by 2028.</H4>
                </div>
                <div class="mission">
                    <h3>MISSION</h3>
                    <H4>LIT sets the way to a standard polytechnic institute, producing graduates who are globally and technically skilled, competent and self-reliant with desirable work values.</H4>
                </div>
            </div>
            <div class="visionMission-card-objectives">
                <h3>GOALS, OBJECTIVES, AND STRATEGIES</h3>
                <div class="visionMission-objectives">
                    <h4><span>Goal 1: Establish laboratories and facilities to qualify the institution as Polytechnic College by 2028.</span></h4>
                    <br>
                    <h4><span>Objectives:</span></h4>
                    <ul>
                        <li>Upgrade/enhance instructional workshop and facilities as per industry requirements by end of 2023.</li>
                        <li>Establish additional diploma laboratory by the end of 2025.</li>
                    </ul>
                </div>
                <div class="visionMission-objectives">
                    <h4><span>Goal 2: Strengthen faculty and staff force.</span></h4>
                    <br>
                    <h4><span>Objectives:</span></h4>
                    <ul>
                        <li>Upgrade competence of at least 80% of the trainers/ instructors by the end of 2023.</li>
                        <li>At least 90% of the trainers are accredited assessors in their respective qualification by 2024.</li>
                        <li>Upgrading/reclassification of existing plantilla positions by 2024.</li>
                        <li>Hire additional trainers to handle additional qualifications and diploma programs by 2025.</li>
                    </ul>
                </div>
                <div class="visionMission-objectives">
                    <h4><span>Goal 3: Increase the institutional capacity to offer quality TVET.</span></h4>
                    <br>
                    <h4><span>Objectives:</span></h4>
                    <ul>
                        <li>Designate two career advocates by 2023.</li>
                        <li>Implement at least three Income Generating Projects (IGPs) one by 2023, one by 2024 and one by 2025.</li>
                        <li>Conduct entrepreneurship training to learners at least 80% every after training.</li>
                        <li>Register Diploma in Hospitality Management at the end of 2027.</li>
                        <li>Start offering Diploma in Hospitality Management by 2028.</li>
                        <li>Strengthen alumni programs.</li>
                        <li>Strengthen QMS.</li>
                    </ul>
                </div>
                <div class="visionMission-objectives">
                    <h4><span>Goal 4: Strengthen Research and Development.</span></h4>
                    <br>
                    <h4><span>Objectives:</span></h4>
                    <ul>
                        <li>Empower research and development team by 2023.</li>
                        <li>Conduct at least three technology research every two years.</li>
                        <li>Publish at least one technology research output yearly.</li>
                        <li>Disseminate research output to the community for adoption at least three every two years.</li>
                        <li>Conduct at least 4 Technology-Based Community Training Programs (TBCTP) funded by the TVET provider.</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    </div>
</body>

</html>
<?php include_once('footer.php'); ?>