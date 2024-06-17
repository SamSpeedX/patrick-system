<?php
session_start();
if (!isset($_GET['token'])) {
    $error = "You don't have Token to Access this page!";
    header("location: error.php?error=$error");
}
$uid = $_SESSION['user_id'];

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
    <title>PATRICK CONTRACTOR'S | PASSWORD RESET</title>
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/sign.css">
    <script src="assets/js/app.json" type="application/Id+json"></script>
</head>
<body>
    <div class="reset-container">
        <form action="system/reseti.php" method="post">
            <p>
                Enter your email to get reset link.
            </p>
            <div class="wrap">
                <input type="hidden" name="ID" value="<?php echo $uid; ?>">
                <label for="email">email</label><br>
                <div class="input-box">
                    <input type="email" name="email" id="email"><span id="show"><i class="fa fa-email"></i></span>
                </div>
            </div>

            <button type="submit" class="btn1">Send</button>
            <div class=""></div>
        </form>
    </div>
    
    <script src="./assets/js/all.min.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>
</html>