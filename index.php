<?php
require_once 'config.php';

session_start();

mysqli_query($conn, "INSERT INTO `viwers` (muda, tarehe) VALUE (CURRENT_TIME(), CURRENT_DATE())");

if (isset($_SESSION['user_id'])) {
    header("location: home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Patrick, Contractor, civil Enginer, Patrick Contractor, Electrician">
    <meta name="description" content="Patrick Contractor is Registed Company from Tanzania deals with building constraction, cctv installation and Electrical installation.">
    <meta name="title" content="Patrick Contractor's">
    <meta name="author" content="SAM OCHU">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <title>PATRICK CONTRACTOR'S</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/loading.css">
    <script src="assets/js/app.json" type="application/Id+json"></script>
</head>
<body id="body">
    <header>
        <div class="logo">PATRICK CONTRACTOR'S</div>
        <div class="menu" id="menu">
            <img src="icons/System/menu-line.svg" class="b" width="20rem" alt="">
        </div>
        <nav id="nav">
            <div class="content">
                <div class="close" id="close">&boxtimes;</div>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="https://samochu.com">Developer</a></li>
                    </ul>
                    <div class="center">
                        <div class="sign-in-btn" onclick="window.location.href='signin.php'">Sign in</div>
                        <div class="sign-up-btn" onclick="window.location.href='signup.php'">Sign up</div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="sign">
            <div class="sign-in" onclick="window.location.href='signin.php'">Sign in</div>
            <div class="sign-up" onclick="window.location.href='signup.php'">Sign up</div>
        </div>
        <div class="lod f" id="loder">
            <div class="container">
                <div class="content">
                    <img src="icons/System/loader-5-line.svg" alt="" width="90rem"> 
                    <div class="logo">PATRICK CONTRACTOR'S</div>
                </div>
            </div>
        </div>
    </header>
    
    <main>
        <section id="hero" class="hero">
            <div class="content">
                <h3>Welcome Patrick Contractor's</h3>
                <p>
                    You want to build house?
                </p>
                <p>
                    You want to do Electrical installation?
                </p>
                <p>
                    This is best place for you meet the Talented people from Patrick Contractor's for high quaility service.
                </p>
                <!-- <p>
                    Patrick Contractor's is Register company which deal with the complete building of house,school and other.
                </p> -->
                <p>
                    Build a hight Quality house faster with a new Digital Technology and Design from talented Patrick contractor's
                </p>
            </div>
        </section>

        <section id="services" class="services">
            <div class="container">
                <div class="content">
                    <h2>Our services</h2>
                    <h3>Buliding Constraction.</h3>
                    <p>
                        We build different building acconding to your need. we build the building such as follo:-
                    </p>
                    <div class="boxers">
                        <div class="box">
                            <div class="content">
                                <!-- <h3>house</h3> -->
                                <img src="icons/Buildings/home-5-line.svg" width="40rem" alt="">
                            </div>
                        </div>
                        <div class="box">
                            <div class="content">
                            <!-- <h3>school</h3> -->
                            <img src="icons/Buildings/school-line.svg" width="40rem" alt="">
                            </div>
                        </div>
                        <div class="box">
                            <div class="content">
                            <!-- <h3>hosplital</h3> -->
                            <img src="icons/Buildings/hospital-line.svg" width="40rem" alt="">
                            </div>
                        </div>
                        <div class="box">
                            <div class="content">
                            <!-- <h3>hotel</h3> -->
                            <img src="icons/Buildings/hotel-line.svg" width="40rem" alt="">
                            </div>
                        </div>
                        <div class="box">
                            <div class="content">
                            <!-- <h3>store</h3> -->
                            <img src="icons/Buildings/store-line.svg" width="40rem" alt="">
                            </div>
                        </div>
                    </div>
                    <h3>Electrical Installation.</h3>
                    <p>
                        We do Electrical installation for our client and non client for all of your Electrical need. also we do Electrical Fance.
                    </p>
                    <div class="boxers">
                        <div class="box">
                            <div class="content">
                                <!-- <h3>house</h3> -->
                                <img src="icons/Others/lightbulb-fill.svg" width="40rem" alt="">
                            </div>
                        </div>
                        <div class="box">
                            <div class="content">
                                <!-- <h3>house</h3> -->
                                <img src="icons/System/alarm-warning-line.svg" width="40rem" alt="">
                            </div>
                        </div>
                    </div>
                    <h3>Cctv Installation.</h3>
                    <p>
                        We do Cctv installation for our client and non client for all of your need.
                    </p>
                    <div class="boxers">
                        <div class="box">
                            <div class="content">
                                <!-- <h3>house</h3> -->
                                <img src="icons/Media/camera-3-fill.svg" width="40rem" alt="">
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container">
                <div class="content">
                    <h2>About Patrick Contractor's</h2>
                    <p>
                        Patrick Contractor's is Register company which deal with the complete Cctv Installation, Electrical Installation and building of house,school and other.
                    </p>
                    <p>Our Company have experiency of work with individual, Company and Gorvenment. in deferent projects within Tanzania.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="logo">PATRICK CONTRACTOR'S</div>
        <div class="h"></div>
        <div class="content">
            <div class="location">
                <h3>Location</h3>
                <p>Kabuku, Tanga.</p>
                <p>Tanzania.</p>
            </div>

            <!-- <div class="media">
                <div class="content">
                    <div class="facebook">
                        <a href="https://facebook.com/samochuu">
                            <i class="fb fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div> -->

            <div class="terms-condition">
                <h3>Terms and Condition of services</h3>
                <a href="term">Terms and privacys</a><br>
                <a href="condition">Condition of services</a>
            </div>
        </div>
        <div class="copyright">
            PATRICK CONTRACTOR'S 2024&copy; | All right reserved
        </div>
    </footer>
    <script src="assets/js/script.js"></script>
    <!-- <script src="assets/js/all.min.js"></script> -->
</body>
</html>