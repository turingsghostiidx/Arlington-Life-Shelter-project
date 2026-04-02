<?php include 'include.php'; ?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arlington Life Shelter</title>


    <style>
        header {
            padding: 15px 0;
            text-align: center;
        }

        header img {
            display: inline-block;
        }

        nav {
            display: flex;
            justify-content: center;

            padding: 15px 0;
            margin-top: 50px;
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





        footer {
            padding: 40px 80px;
        }

        .footerTop {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 100px;
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
    </style>
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

    
    <?php echo $footer ?>
</body>



</html>