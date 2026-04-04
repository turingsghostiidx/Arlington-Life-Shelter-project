<?php include 'include.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arlington Life Shelter</title>

    <style>
        header {
            padding: 10px 0;
            margin: 0;
            text-align: center;
        }

            header img {
                display: inline-block;
                padding: 20px;
            }

        nav {
            display: flex;
            justify-content: center;
            padding: 15px 0;
            margin: 20px 0;
        }

        .links {
            list-style: none;
            display: flex;
            justify-content: center;
            text-align: center;
            padding: 0;
            margin: 0;
            gap: 50px;
            width: 600px;
        }

            .links li a {
                text-decoration: none;
                padding: 5px 10px;
                transition: background-color 0.2s ease, color 0.2s ease;
            }

                .links li a:hover {
                    background-color: #f0f0f0;
                    color: #000;
                    border-radius: 4px;
                }

        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 30px;
            left: 0;
            background: white;
            list-style: none;
            padding: 10px 0;
            margin: 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 180px;
        }

            .dropdown-menu li a {
                display: block;
                padding: 8px 15px;
                text-align: left;
            }

                .dropdown-menu li a:hover {
                    background-color: #eee;
                }

        .dropdown.active .dropdown-menu {
            display: block;
        }

        .dropdown-sub {
            position: relative;
        }

        .dropdown-submenu {
            display: none;
            position: absolute;
            top: 0;
            left: 180px;
            background: white;
            border: 1px solid #ccc;
            border-radius: 4px;
            list-style: none;
            padding: 10px 0;
            width: 180px;
        }

            .dropdown-submenu li a {
                padding: 8px 15px;
                display: block;
            }

        .dropdown-sub.active .dropdown-submenu {
            display: block;
        }

        .slideshow-container {
            position: relative;
            max-width: 1200px;
            margin: 20px;
            overflow: hidden;
        }

        .slide {
            display: none;
            position: relative;
        }

            .slide img {
                width: 100%;
                height: auto;
                object-fit: contain;
                display: block;

                filter: brightness(60%);
            }

        .text-overlay {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);

            color: white;
            font-size: 2.2rem;
            font-weight: bold;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
            text-align: center;
        }

        .slide-btn {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translateX(-50%);
            padding: 16px 32px;
            font-size: 1.2rem;
            background: #ffffffcc;
            color: #000;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

            .slide-btn:hover {
                background: white;
            }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding: 20px;
            font-size: 40px;
            font-weight: bold;
            color: #fff;
            background: rgba(0, 0, 0, 0.55);
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            transition: 0.3s ease;
            user-select: none;
        }

        .prev {
            left: 25px;
        }

        .next {
            right: 25px;
        }

            .prev:hover,
            .next:hover {
                background: rgba(0, 0, 0, 0.8);
                color: #fff;
                transform: translateY(-50%) scale(1.15);
            }

        .fade {
            animation: fadeEffect 1s;
        }

        @keyframes fadeEffect {
            from {
                opacity: 0.4;
            }

            to {
                opacity: 1;
            }
        }

        .motto {
            width: 100%;
            background-color: #D3D3D3;
            padding: 25px 0;
            text-align: center;
            font-size: 3rem;
            font-weight: bold;
            margin-top: 40px;
        }

        footer {
            padding: 40px 80px;
        }

        .footerTop {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 300px;
            margin: 20px auto;
            max-width: 900px;
        }

        .footer1 {
            width: 40%;
        }

        .footer2 {
            width: 40%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            padding: 12px;
            border: 2px solid #ccc;
            border-radius: 6px;
            background: #fafafa;
            max-width: 260px;
        }

        .footer2 img {
            width: 100%;
            height: auto;
            object-fit: contain;
            border: 1px solid #ddd;
            padding: 4px;
            background: white;
        }

        .footer3 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .footer3 p {
            width: 33%;
            margin: 0;
        }

        .footer3 p:nth-child(1) {
            text-align: left;
        }

        .footer3 p:nth-child(2) {
            text-align: center;
        }

        .footer3 p:nth-child(3) {
            text-align: right;
        }


        header,
        nav,
        .slideshow-container {
            width: 100%;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        nav {
            position: relative;
            z-index: 9999;
        }

        .dropdown-menu,
        .dropdown-submenu {
            position: absolute;
            z-index: 10000;
        }

        .slideshow-container {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>
    <?php echo $headerLogo ?>
    <?php echo $navLinks ?>


    <div class="slideshow-container">
        <div class="slide fade">
            <img src="slide.webp">
            <div class="text-overlay">A New Day. A New Home. A New Life.</div>
            <a href="#" class="slide-btn">Make a Gift Today</a>
        </div>

        <div class="slide fade">
            <img src="resources.jpg">
            <div class="text-overlay">Immediate Needs</div>
            <a href="#" class="slide-btn">Learn More</a>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>


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
            if (slideIndex > slides.length) { slideIndex = 1; }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 20000);
        }
    </script>


    <!-- Mission Statement  -->
    <div style="text-align:center; max-width:800px; margin:50px auto 20px auto; font-size:25px;">
        <strong>Mission:</strong> 
        <p>The mission of Arlington Life Shelter is to promote self-sufficiency by providing shelter,
        employment programs, and transitional services for North Texans impacted by homelessness.</p>
    </div>

    <!-- Cards Start -->
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
                    background-image:url('programs.jpeg');
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
                Our programs are designed to further our mission and provide much needed services for individuals and families impacted by homelessness in North Texas.
            </p>
        </div>

        <!-- Resources -->
        <div style="text-align:center;">
            <a href="#" style="text-decoration:none;">
                <div class="card" style="
                    width:250px;
                    height:250px;
                    background-image:url('resources.jpeg');
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
                This is a list of resources for those experiencing eviction concerns, unemployment, food insecurity and much more.
            </p>
        </div>

        <!-- Donate -->
        <div style="text-align:center;">
            <a href="#" style="text-decoration:none;">
                <div class="card" style="
                    width:250px;
                    height:250px;
                    background-image:url('donate.jpeg');
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
                    background-image:url('history.jpeg');
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
    <!-- Cards Section End -->
    <!-- Hover Effect Script -->


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


    <div class='motto'>
        <p>A New Day.  A New Home.  A New Life.</p>
    </div>


    <?php echo $footer ?>
</body>

</html>