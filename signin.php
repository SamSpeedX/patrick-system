<?php
function token($ure) {
    return bin2hex(random_bytes($ure));
}
$token = token($ure = 4);
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
    <title>PATRICK CONTRACTOR'S | SIGN IN</title>
    <link rel="stylesheet" href="./assets/css/sign.css">
    <script src="assets/js/app.json" type="application/Id+json"></script>
</head>
<body id="sign">
    <div class="sign-up-container">
        <form action="system/log.php" method="post">
            <div class="upya">
                <div class=""></div>
                <h3>Sign in form</h3>
                <div class="">
                <a href="signup.php">Sign up</a>
                </div>
            </div>
            
            <div class="wrap">
                <label for="username">Username</label><br>
                <div class="input-box" id="name">
                    <input type="text" name="username" id="username"><img src="icons/User & Faces/user-line.svg" alt="user" width="20rem">
                </div>
            </div>

            <div class="wrap">
                <label for="password">Password</label><br>
                <div class="input-box" id="box2">
                    <input type="password" name="password" id="password">
                    <img src="icons/System/eye-line.svg" width="20rem" id="show" class="show" alt="eye">
                    <img src="icons/System/eye-off-line.svg" width="20rem" id="hide" class="hide" alt="eye">
                    <img src="icons/System/lock-password-line.svg" class="show" id="show" width="20rem" alt="pass"></span>
                </div>
            </div>
            
            <div class="action">
                <div class="remember">
                    <span>Remember me</span>
                    <input type="checkbox" name="remember" id="remember">
                </div>
                <div class="forget">
                    <a href="reseti.php?token=<?php echo $token; ?>">Forget password</a>
                </div>
            </div>

            <button type="submit" class="btn1">Sing in</button>
            <div class=""></div>
        </form>
    </div>
    <script src="assets/js/sign.js"></script>
</body>
</html>
