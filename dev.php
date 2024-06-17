<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("location: home.php");
    exit;
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
</head>
<body>
    <header>
        <div class="logo">PATRICK CONTRACTOR'S</div>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="dev.php">Developer</a></li>
            </ul>
        </nav>

        <div class="sign">
            <div class="sign-in" onclick="window.location.href='signin.php'">Sign in</div>
            <div class="sign-up" onclick="window.location.href='signup.php'">Sign up</div>
        </div>
    </header>

    <footer>
        <div class="content">
            <div class="terms-condition">
                <a href="term">pictures</a><br>
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