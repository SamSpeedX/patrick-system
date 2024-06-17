<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PATRICK CONTRACTOR'S</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/remix.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/icon.css">
</head>
<body>
    <header>
        <div class="logo">PATRICK CONTRACTOR'S</div>
        <div class="menu" id="menu">
            <img src="icons/System/menu-line.svg" class="b" width="20rem" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="dashboard.php">dashboard</a></li>
                <!-- <li><a href="about.php">About</a></li> -->
                <li><a href="https://samochu.com" class="current">Developer</a></li>
            </ul>
        </nav>

        <div class="sign">
            <div class=""></div>
            <div class="contact-f" onclick="window.location.href='contact.php'">Contact us</div>
        </div>
    </header>
    <main>
        <section id="hero" class="hero">
            <div class="content"></div>
        </section>

        <section id="services" class="services">
            <div class="container">
                <div class="content">
                    <h2>Our services</h2>
                    <p>
                        We build different building acconding to your need.
                    </p>
                    <di class="boxers">
                        <div class="box">
                            <div class="content">
                                <h3>Html</h3>
                                <img src="icons/Development/html5-line.svg" width="40rem" alt="">
                            </div>
                        </div>
                        <div class="box">
                            <div class="content">
                            <h3>Css</h3>
                            <img src="icons/Development/css3-line.svg" width="40rem" alt="">
                            </div>
                        </div>
                        <div class="box">
                            <div class="content">
                            <h3>Javascript</h3>
                            <img src="icons/Development/javascript-line.svg" width="40rem" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about"></section>
    </main>
    <footer>
        <div class="content">
            <div class="terms-condition">
                <a href="term">Terms and privacys</a><br>
                <a href="condition">Condition of services</a>
            </div>

            <div class="terms-condition">
                <a href="term">Terms and privacys</a><br>
                <a href="condition">Condition of services</a>
            </div>
        </div>
        <div class="copyright">
            PATRICK CONTRACTOR'S 2024&copy; | All right reserved
        </div>
    </footer>
</body>
</html>