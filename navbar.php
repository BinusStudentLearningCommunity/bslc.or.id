<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
    <title>BSLC | Binus Student Learning Community</title>
</head>

<body>
    <nav id="navbar" class="navbar">
        <div class="logo-container">
            <img src="./assets/navbar-assets/logo-bslc.png" id="logoDefault" alt="logo" >
            <img src="./assets/navbar-assets/logo-bslc-scroll.png" id="logoScroll" alt="logo" >

        </div>

        <div class="section-container">
            <div class="burger-icon">
                <img src="./assets/navbar-assets/hamburger-icon.png" alt="" onclick="toggleMenu()"  >
            </div>

            <div class="menu" id="menu">
                <a href="#">About Us</a>
                <a href="#">Events</a>
                <a href="#">E-Learning</a>
                <a href="#">E-Magazine</a>

            </div>

        </div>

    </nav>

    <section class="content-1">
        <img src="./main-carousel.png" alt="" >
    </section>


    <script src="./navbar-script.js"></script>
</body>

</html>