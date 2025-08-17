<?php include_once('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="CSS/StyleLanding_page.css">
    <base href="images/">
</head>

<body>
    <div class="slideshow-container">
        <button class="slideshow-arrow" id="prevBtn" aria-label="Previous">&#8249;</button>
        <button class="slideshow-arrow" id="nextBtn" aria-label="Next">&#8250;</button>

        <div class="enrol-slide" id="enrolSlide">
            <h1>Lasam Insitute of Technology</h1>
            <h2>Bringing technical education and skills training <br> closer to every Filipinos.</h2>
            <div class="Enroll-con">
                <button class="enrollButton">ENROLL NOW</button>
            </div>
        </div>

        <div class="slideshow-dots">
            <span class="slideshow-dot active" data-index="0"></span>
            <span class="slideshow-dot" data-index="1"></span>
            <span class="slideshow-dot" data-index="2"></span>
            <span class="slideshow-dot" data-index="3"></span>
        </div>
    </div>

    <div class="card2">
        <h1>MISSION</h1>
        <h3>LIT sets the way to a standard polytechnic institute, producing graduates who are globally and
            technically
            skilled, competent and self-reliant with desirable work values.</h3>
        <h1>VISION</h1>
        <h3>To become a Polytechnic Institute by 2028.</h3>
    </div>

    <div class="notice">
        <h2>DATA PRIVACY NOTICE</h2>
        <h4>(Compliance to DPA of 2012, RA 10173)</h4>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const enrolSlide = document.getElementById('enrolSlide');
            const dots = document.querySelectorAll('.slideshow-dot');
            const bgImages = [
                "welding.jpg",
                "img1.jpg",
                "img2.jpg",
                "img3.jpg"
            ];
            let currentSlide = 0;
            let slideInterval = setInterval(nextSlide, 5000);

            function showSlide(index) {
                enrolSlide.style.backgroundImage = `url('${bgImages[index]}')`;
                dots.forEach((dot, i) => {
                    dot.classList.toggle('active', i === index);
                });
                currentSlide = index;
            }

            function nextSlide() {
                let next = (currentSlide + 1) % bgImages.length;
                showSlide(next);
            }

            function prevSlide() {
                let prev = (currentSlide - 1 + bgImages.length) % bgImages.length;
                showSlide(prev);
            }

            document.getElementById('nextBtn').addEventListener('click', () => {
                nextSlide();
                resetInterval();
            });
            document.getElementById('prevBtn').addEventListener('click', () => {
                prevSlide();
                resetInterval();
            });
            dots.forEach(dot => {
                dot.addEventListener('click', (e) => {
                    showSlide(Number(e.target.getAttribute('data-index')));
                    resetInterval();
                });
            });

            function resetInterval() {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, 5000);
            }

            showSlide(currentSlide);
        });
    </script>
</body>

</html>
<?php include_once('includes/footer.php'); ?>