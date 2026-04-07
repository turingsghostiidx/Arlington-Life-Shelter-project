<?php
// Shared page header markup used across the site
$headerLogo =
"<header>
    <a href='index.php'>
            <img src='ALS_Logo.jpg' alt='Arlington Life Shelter Logo'>
    </a>
</header>";

// Main navigation menu markup with dropdown and submenu structure
$navLinks =
"<nav>
    <ul class='links'>

        <li class='dropdown'>
            <a href='#'>Who We Are</a>

                <ul class='dropdown-menu'>
                    <li><a href='mission-history.php'>Mission & History</a></li>
                    <li><a href='frequent-questions.php'>Frequent Questions</a></li>
                    <li><a href='leadership-board.php'>Leadership & Board</a></li>
                    <li><a href='financials.php'>Financials</a></li>
                    <li><a href='locations.php'>Locations</a></li>
                    <li><a href='job-opportunities.php'>Job Opportunities</a></li>
                    <li><a href='contact-us.php'>Contact Us</a></li>
                </ul>
            </li>

        <li class='dropdown'>
            <a href='#'>How We Help</a>

                <ul class='dropdown-menu'>
                    <li><a href='programs-services.php'>Programs & Services</a></li>
                    <li><a href='results.php'>Results</a></li>
                    <li><a href='entrance-requirements.php'>Entrance Requirements</a></li>

                <li class='dropdown-sub'>
                    <a href='#'>Resources ▸</a>

                        <ul class='dropdown-submenu'>
                            <li><a href='myths-about-homelessness.php'>Myths About Homelessness</a></li>
                            <li><a href='community-resources.php'>Community Resources</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        <li class='dropdown'>
            <a href='#'>Get Involved</a>

                <ul class='dropdown-menu'>
                    <li><a href='make-a-gift.php'>Make a Gift</a></li>
                    <li><a href='immediate-needs.php'>Immediate Needs</a></li>
                    <li><a href='path-of-kindness-buy-a-brick.php'>Path of Kindness - Buy a Brick</a></li>
                    <li><a href='donation-guidelines.php'>Donation Guidelines</a></li>

                <li class='dropdown-sub'>
                    <a href='#'>Volunteer ▸</a>

                        <ul class='dropdown-submenu'>
                            <li><a href='volunteer-opportunities.php'>Volunteer Opportunities</a></li>
                            <li><a href='PALS.php'>Partners of the Arlington Life Shelter (PALS)</a></li>
                        </ul>
                    </li>

                <li class='dropdown-sub'>
                    <a href='#'>Tour Arlington Life Shelter ▸</a>

                        <ul class='dropdown-submenu'>
                            <li><a href='virtual-tour.php'>Virtual Tour</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        <li class='dropdown'>
            <a href='#'>News & Events</a>

                <ul class='dropdown-menu'>
                    <li><a href='newsroom.php'>Newsroom</a></li>
                    <li><a href='join-our-mailing-list.php'>Join Our Mailing List</a></li>
                    <li><a href='road-home-luncheon.php'>Road Home Luncheon</a></li>
                </ul>
            </li>

    </ul>
</nav>";

// Shared page footer markup used across the site
$footer =
"<footer>
    <div class='footerTop'>
        <div class='footer1'>
            <p>Arlington Life Shelter</p>
            <p>325 W. Division Street</p>
            <p>Arlington, Texas 76011</p>
            <p>Phone (817) 548-9885</p>

            <a href='#'>
                <p>Contact</p>
            </a>

            <img src='facebook.webp' alt='Facebook Icon'>
            <img src='instagram.webp' alt='Instagram Icon'>
            <img src='youtube.webp' alt='Youtube Icon'>

            <p>Arlington Life Shelter is a 501(c)3 organization. Tax Identification 75-2235099.</p>
        </div>

        <div class='footer2'>
            <img src='EIGLogo.webp' alt='Excellence in Giving Certified Transparent'>
            <img src='CharityNav.webp' alt='Charity Navigator - Three-Star'>
            <img src='silver.webp' alt='Silver Transparancy 2024 - Candid'>
            <img src='Chamber.webp' alt='Greater Arlington Chamber of Commerce'>
        </div>
    </div>

    <hr>

    <div class='footer3'>
        <p>Privacy Policy</p>

        <p>© 2026 Arlington Life Shelter</p>
    </div>
</footer>"
?>