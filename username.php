<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: signin.php");
    exit();
}
$uid = $_SESSION['user_id'];

if (!isset($_GET['token'])) {
    $error = "You don't have Token to Access this page!";
    header("location: error.php?error=$error");
}

function generateToken($length = 51) {
    return bin2hex(random_bytes($length));
}
$token = generateToken();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Patrick, Contractor, civil Enginer, Patrick Contractor, Electrician">
    <meta name="description" content="Patrick Contractor is Registed Company from Tanzania deals with building constraction, cctv installation and Electrical installation.">
    <meta name="title" content="Patrick Contractor's">
    <meta name="author" content="SAM OCHU">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PATRICK CONTRACTOR'S | CHANGE USERNAME</title>
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/sign.css">
    <script src="assets/js/app.json" type="application/Id+json"></script>
</head>
<body>
    <div class="reset-container">
        <form action="system/username.php" method="post">
            <p>
                Enter your new username then password to change username.
            </p>

            <div class="wrap">
                <label for="username">New username</label><br>
                <div class="input-box" id="name">
                    <input type="text" name="username" id="username" autofocus required><img src="icons/User & Faces/user-line.svg" alt="user" width="20rem">
                </div>
            </div>

            <div class="wrap">
                <input type="hidden" name="uid" value="<?php echo $uid; ?>">
                <label for="password">Password</label><br>
                <div class="input-box" id="box2">
                    <input type="password" name="password" id="password" required>
                    <img src="icons/System/eye-line.svg" width="20rem" id="show" class="show" alt="eye">
                    <img src="icons/System/eye-off-line.svg" width="20rem" id="hide" class="hide" alt="eye">
                    <img src="icons/System/lock-password-line.svg" class="show" id="show" width="20rem" alt="pass"></span>
                </div>
            </div>

            <button type="submit" class="del-ac">Save change</button>
            <div class=""></div>
        </form>
    </div>
    <script src="assets/js/sign.js"></script>
    <script src="./assets/js/all.min.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>
</html>