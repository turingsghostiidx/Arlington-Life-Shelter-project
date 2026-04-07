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

<!-- Navigation dropdown behavior -->
<script>
    document.addEventListener("DOMContentLoaded", function () {

        document.querySelectorAll('.dropdown > a').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelectorAll('.dropdown').forEach(d => {
                    if (d !== this.parentElement) d.classList.remove('active');
                });

                this.parentElement.classList.toggle('active');
            });
        });

        document.querySelectorAll('.dropdown-sub > a').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelectorAll('.dropdown-sub').forEach(d => {
                    if (d !== this.parentElement) d.classList.remove('active');
                });

                this.parentElement.classList.toggle('active');
            });
        });

        document.addEventListener('click', function (e) {
            if (!e.target.closest('.dropdown')) {
                document.querySelectorAll('.dropdown').forEach(d => d.classList.remove('active'));
                document.querySelectorAll('.dropdown-sub').forEach(d => d.classList.remove('active'));
            }
        });

    });
</script>

<!-- Hero slideshow -->
<div class="slideshow-container">
    <div class="slide fade">
        <img src="/Images/slide.webp">
        <div class="text-overlay">A New Day. A New Home. A New Life.</div>
        <a href="#" class="slide-btn">Make a Gift Today</a>
    </div>

    <div class="slide fade">
        <img src="/Images/resources.jpg">
        <div class="text-overlay">Immediate Needs</div>
        <a href="#" class="slide-btn">Learn More</a>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<!-- Slideshow rotation logic -->
<script>
    let slideIndex = 0;
    showSlides();

    function plusSlides(n) {
        slideIndex += n - 1;
        showSlides();
    }

    function showSlides() {
        let slides = document.getElementsByClassName("slide");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 20000);
    }
</script>

<!-- Mission statement -->
<div style="text-align:center; max-width:800px; margin:50px auto 20px auto; font-size:25px;">
    <strong>Mission:</strong>
    <p>The mission of Arlington Life Shelter is to promote self-sufficiency by providing shelter,
        employment programs, and transitional services for North Texans impacted by homelessness.</p>
</div>

<!-- Main content cards -->
<div style="
        display: grid;
        grid-template-columns: repeat(2, 250px);
        gap: 60px;
        justify-content: center;
        margin-top: 20px;
    ">
    <!-- Programs -->
    <div style="text-align:center;">
        <a href="#" style="text-decoration:none;">
            <div class="card" style="
                    width:250px;
                    height:250px;
                    background-image:url('/Images/programs.jpeg');
                    background-size:cover;
                    background-position:center;
                    display:flex;
                    flex-direction:column;
                    align-items:center;
                    justify-content:flex-start;
                    padding-top:20px;
                    color:black;
                    font-weight:bold;
                    font-size:20px;
                    text-align:center;
                    border-radius:10px;
                    overflow:hidden;
                ">
                PROGRAMS & SERVICES
            </div>
        </a>
        <p style="font-size:16px; margin-top:10px; max-width:250px; margin-left:auto; margin-right:auto;">
            Our programs are designed to further our mission and provide much needed services for individuals and
            families impacted by homelessness in North Texas.
        </p>
    </div>

    <!-- Resources -->
    <div style="text-align:center;">
        <a href="#" style="text-decoration:none;">
            <div class="card" style="
                    width:250px;
                    height:250px;
                    background-image:url('images/resources.jpeg');
                    background-size:cover;
                    background-position:center;
                    display:flex;
                    flex-direction:column;
                    align-items:center;
                    justify-content:flex-start;
                    padding-top:20px;
                    color:black;
                    font-weight:bold;
                    font-size:20px;
                    text-align:center;
                    border-radius:10px;
                    overflow:hidden;
                ">
                RESOURCES
            </div>
        </a>
        <p style="font-size:16px; margin-top:10px; max-width:250px; margin-left:auto; margin-right:auto;">
            This is a list of resources for those experiencing eviction concerns, unemployment, food insecurity and much
            more.
        </p>
    </div>

    <!-- Donate -->
    <div style="text-align:center;">
        <a href="#" style="text-decoration:none;">
            <div class="card" style="
                    width:250px;
                    height:250px;
                    background-image:url('images/donate.jpeg');
                    background-size:cover;
                    background-position:center;
                    display:flex;
                    flex-direction:column;
                    align-items:center;
                    justify-content:flex-start;
                    padding-top:20px;
                    color:black;
                    font-weight:bold;
                    font-size:20px;
                    text-align:center;
                    border-radius:10px;
                    overflow:hidden;
                ">
                DONATE
            </div>
        </a>
        <p style="font-size:16px; margin-top:10px; max-width:250px; margin-left:auto; margin-right:auto;">
            Help provide meals, shelter, employment programs, case management, and more with your donation.
        </p>
    </div>

    <!-- History -->
    <div style="text-align:center;">
        <a href="#" style="text-decoration:none;">
            <div class="card" style="
                    width:250px;
                    height:250px;
                    background-image:url('images/history.jpeg');
                    background-size:cover;
                    background-position:center;
                    display:flex;
                    flex-direction:column;
                    align-items:center;
                    justify-content:flex-start;
                    padding-top:20px;
                    color:black;
                    font-weight:bold;
                    font-size:20px;
                    text-align:center;
                    border-radius:10px;
                    overflow:hidden;
                ">
                OUR HISTORY
            </div>
        </a>
        <p style="font-size:16px; margin-top:10px; max-width:250px; margin-left:auto; margin-right:auto;">
            Discover how we were founded and remain true to our original mission.
        </p>
    </div>
</div>

<!-- Card hover effect -->
<script>
    var cards = document.getElementsByClassName("card");

    for (var i = 0; i < cards.length; i++) {
        var card = cards[i];

        // Hover shadow effect
        card.onmouseover = function () {
            this.style.boxShadow = "0 8px 20px rgba(0,0,0,0.3)";
        };

        card.onmouseout = function () {
            this.style.boxShadow = "none";
        };
    }
</script>


<!-- Stats -->
<div id="impact-stats">
    <div class="stat-box">
        <div class="stat-number" data-target="848">0</div>
        <div class="stat-label">Individuals Served</div>
    </div>

    <div class="stat-box">
        <div class="stat-number" data-target="62">0</div>
        <div class="stat-label">Percent of Women & Children Served</div>
    </div>

    <div class="stat-box">
        <div class="stat-number" data-target="93594">0</div>
        <div class="stat-label">Meals Served</div>
    </div>
</div>

<script>
            function animateStats() {
        const stats = document.querySelectorAll('.stat-number');

        stats.forEach(stat => {
            const target = +stat.getAttribute('data-target');
            const speed = 50; 
            let count = 0;

            const updateCount = () => {
                const increment = Math.max(1, Math.ceil(target / 200));

                if (count < target) {
                    count += increment;
                    stat.textContent = count.toLocaleString();
                    requestAnimationFrame(updateCount);
                } else {
                    stat.textContent = target.toLocaleString();
                }
            };

            updateCount();
        });
    }

        document.addEventListener("DOMContentLoaded", animateStats);
</script>


<!-- Footer motto -->
<div class='motto'>
    <p>A New Day. A New Home. A New Life.</p>
</div>

<?php echo $footer ?>
</body>

</html>