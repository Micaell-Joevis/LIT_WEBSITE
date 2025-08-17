    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/StyleHeader.css">
    </head>

    <body>
        <div class="header">
            <button class="burger" id="burgerBtn" aria-label="Open navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="header-tabs">
                <img src="images/Tesda Logo.png" alt="" width="60">
                <a href="../Landing_Page.php">Home</a>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" id="about">About
                        <span class="arrow">&#9662;</span>
                    </a>
                    <div class="dropdown-content">
                        <a href="../history.php">LIT History</a>
                        <a href="../message.php">Message from School</a>
                        <a href="../personel.php">LIT Personel</a>
                        <a href="../assessment.php">Assessment Center</a>
                        <a href="../visionMission.php">Vision and Mission</a>
                    </div>
                </div>
                <br>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle">Program and Services
                        <span class="arrow">&#9662;</span>
                    </a>
                    <div class="dropdown-content">
                        <div class="dropdown">
                            <a href="../Comeptency.php" class="dropdown-toggle" id="competencyLink">
                                Competency Assessment
                                <span class="arrow">&#9662;</span>
                            </a>
                            <div class="dropdown-content">
                                <a href="../assessment1.php">Assessment Tab 1</a>
                                <a href="../assessment2.php">Assessment Tab 2</a>
                            </div>
                        </div>
                        <a href="../Programs.php">Programs</a>
                        <a href="../qualification.php">Qualification VGMO</a>
                    </div>
                </div>

                <a href="">How to Enroll</a>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle">News
                        <span class="arrow">&#9662;</span>
                    </a>
                    <div class="dropdown-content">
                        <a href="../calendar.php">Calendar Event</a>
                        <a href="../downloads.php">Downloads</a>
                        <a href="../gallery.php">Gallery</a>
                    </div>
                </div>
                <a href="">Contact</a>
                <div class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle">Transparency
                        <span class="arrow">&#9662;</span>
                    </a>
                    <div class="dropdown-content">
                        <a href="../transparencySeal.php">Transparency Seal</a>
                        <a href="../citizensCharter.php">Citezen's Charter</a>
                        <a href="../PHILGEP.php">PHILGEP's Posting</a>
                    </div>
                </div>
            </div>
            <div class="header-search">
                <input type="text" placeholder="Search...">
                <a href="../login.php" id="signIn">Sign in</a>
                <a href="../register.php" id="signUp">Sign up</a>
            </div>
        </div>
        <script>
            const burgerBtn = document.getElementById('burgerBtn');
            const headerTabs = document.querySelector('.header-tabs');

            burgerBtn.addEventListener('click', function() {
                burgerBtn.classList.toggle('active');
                headerTabs.classList.toggle('open');
            });

            document.querySelectorAll('.dropdown').forEach(function(dropdown) {
                var toggle = dropdown.querySelector('.dropdown-toggle');
                var content = dropdown.querySelector('.dropdown-content');
                var arrow = dropdown.querySelector('.arrow');

                if (toggle && toggle.id === 'competencyLink') {
                    toggle.addEventListener('click', function(e) {
                        if (!content.classList.contains('show')) {
                            e.preventDefault();
                            document.querySelectorAll('.dropdown-content').forEach(function(el) {
                                if (el !== content) el.classList.remove('show');
                            });
                            document.querySelectorAll('.arrow').forEach(function(el) {
                                if (el !== arrow) el.classList.remove('rotate');
                            });
                            content.classList.toggle('show');
                            arrow.classList.toggle('rotate');
                        }
                    });
                } else if (toggle) {
                    toggle.addEventListener('click', function(e) {
                        e.preventDefault();
                        document.querySelectorAll('.dropdown-content').forEach(function(el) {
                            if (el !== content) el.classList.remove('show');
                        });
                        document.querySelectorAll('.arrow').forEach(function(el) {
                            if (el !== arrow) el.classList.remove('rotate');
                        });

                        content.classList.toggle('show');
                        arrow.classList.toggle('rotate');
                    });
                }

                dropdown.addEventListener('mouseenter', function() {
                    if (window.innerWidth > 768) {
                        content.classList.add('show');
                        arrow.classList.add('rotate');
                    }
                });
                dropdown.addEventListener('mouseleave', function() {
                    if (window.innerWidth > 768) {
                        content.classList.remove('show');
                        arrow.classList.remove('rotate');
                    }
                });
            });

            document.addEventListener('click', function(e) {
                if (!e.target.closest('.dropdown')) {
                    document.querySelectorAll('.dropdown-content').forEach(function(el) {
                        el.classList.remove('show');
                    });
                    document.querySelectorAll('.arrow').forEach(function(el) {
                        el.classList.remove('rotate');
                    });
                }
            });
        </script>