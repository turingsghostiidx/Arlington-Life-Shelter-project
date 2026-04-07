<?php include 'include.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arlington Life Shelter</title>

    <!-- Google Fonts preload and stylesheet -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php echo $headerLogo ?>
    <?php echo $navLinks ?>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

            document.querySelectorAll('.dropdown > a').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                        document.querySelectorAll('.dropdown').forEach(d => {
                            if (d !== this.parentElement) d.classList.remove('active');
                        });

                        this.parentElement.classList.toggle('active');
                    });
                });

                document.querySelectorAll('.dropdown-sub > a').forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();

                        document.querySelectorAll('.dropdown-sub').forEach(d => {
                            if (d !== this.parentElement) d.classList.remove('active');
                        });

                        this.parentElement.classList.toggle('active');
                    });
                });

                document.addEventListener('click', function(e) {
                    if (!e.target.closest('.dropdown')) {
                        document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('active'));
                        document.querySelectorAll('.dropdown-sub').forEach(d => d.classList.remove('active'));
                    }
                });

            });
    </script>



    <!-- PAGE TITLE BANNER -->
    <div style="
        width: 100%;
        background-color: #e6e6e6;
        padding: 40px 0;
        text-align: center;
        margin-top: 20px;
        border-top: 2px solid #ccc;
        border-bottom: 2px solid #ccc;
    ">
        <h1 style="margin: 0; font-size: 2.5rem; font-weight: bold;">
            Frequent Questions
        </h1>
    </div>

    

    <div style="display: flex; justify-content: center; gap: 40px; max-width: 1200px; margin: 40px auto;">

    <!-- LEFT COLUMN: Relevant Links -->
    <div style="width: 30%; padding: 20px; border-right: 2px solid #ddd;">

        <ul style="list-style: none; padding: 0; line-height: 1.8;">
            <li><a href='mission-history.php'>Mission & History</a></li>
            <li><a href='frequent-questions.php'>Frequent Questions</a></li>
            <li><a href='leadership-board.php'>Leadership & Board</a></li>
            <li><a href='financials.php'>Financials</a></li>
            <li><a href='locations.php'>Locations</a></li>
            <li><a href='job-opportunities.php'>Job Opportunities</a></li>
            <li><a href='contact-us.php'>Contact Us</a></li>
        </ul>

    </div>

    <!-- RIGHT COLUMN: Page Content -->
    <div style="width: 60%; padding: 20px;">
        <h1>Mission:</h1>
        <p>
            The mission of Arlington Life Shelter is to promote self-sufficiency by providing shelter, employment programs and transitional services for North Texans impacted by homelessness.
        </p>
    </div>

    </div>



    <?php echo $footer ?>
</body>

</html>