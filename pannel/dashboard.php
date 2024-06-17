<?php
session_start();

require_once 'system/config.php';

if (!isset($_SESSION['username'])) {
    header("location: signin.php");
    exit();
}

function generateToken($length = 51) {
    return bin2hex(random_bytes($length));
}
$token = generateToken();

function generateTokeni($length = 8) {
    return bin2hex(random_bytes($length));
}
$tokeni = generateTokeni();

$uid = $_SESSION['user_id'];

$angalia = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$uid'");

if ($angalia->num_rows === 1) {
    $ona = mysqli_fetch_assoc($angalia);
    $name = $ona['jina'];
    $email = $ona['pepe'];
    $uip = $ona['ip'];
    $hali = $ona['hali'];

    if ($hali == "haijahakikishwa") {
        $alert = "Your email not Verifid.";
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/loading.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Patrick, Contractor, civil Enginer, Patrick Contractor, Electrician">
    <meta name="description" content="Patrick Contractor is Registed Company from Tanzania deals with building constraction, cctv installation and Electrical installation.">
    <meta name="title" content="Patrick Contractor's">
    <meta name="author" content="SAM OCHU">
    <title>PATRICK CONTRACTOR'S</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
                    <li><a href="home.php" >Home</a></li>
                    <li><a href="dashboard.php" class="current">dashboard</a></li>
                    <li><a href="https://samochu.com">Developer</a></li>
                    <li><a href="contact.php" class="b">Contact us</a></li>
                    <li><a href="signout.php" class="b">Sign out</a></li>
                </ul>
            </div>
        </nav>

        <div class="sign">
            <div class="block"></div>
            <div class="contact-f" onclick="window.location.href='signout.php'">sign out  <span> now</span></div>
        </div>
        <div class="lod f" id="loder">
            <div class="container">
                <div class="content">
                    <img src="icons/System/loader-5-line.svg" alt="" width="90rem"> 
                    <div class="logo f">PATRICK CONTRACTOR'S</div>
                </div>
            </div>
        </div>
    </header>

    <div class="user-info">
        <div class="container">
            <div class="content">
                <h2>Here's Your Dashboard</h2><br>
                <?php
                if (isset($alert)) {
                    echo "<p class='alert'>". $alert . " <a href='hakiki.php?token=$tokeni'>Send verification</a></p>";
                }
                ?>
                <div class="info">
                    <div class="name">
                        <span>Username:</span>
                        <span class="user-name"><?php echo $name; ?></span>
                    </div><br>
                    <div class="email">
                        <span>email: </span>
                        <span class="user-email"><?php echo $email; ?></span>
                    </div><br>
                    <div class="uip">
                        <span>ip: </span>
                        <span class="user-ip"><?php echo $uip; ?></span>
                    </div><br>
                </div>
                <div class="action-bar">
                    <div class="action-btn1">
                        <button class="pass-btn" onclick="window.location.href='reset.php?token=<?php echo $token; ?>'">Reset Password</button>
                        <button class="name-btn" onclick="window.location.href='username.php?token=<?php echo $token; ?>'">Change Username</button>
                    </div><br>
                    <div class="action-btn2">
                        <button class="delete-btn" onclick="window.location.href='delete.php?token=<?php echo $token; ?>'">Delete Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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