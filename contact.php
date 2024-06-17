<?php
require_once 'config.php';
session_start();


    $uid = $_SESSION['user_id'];
    $chek = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$uid'");

    if ($chek) {
        $ta = mysqli_fetch_assoc($chek);
        while ($ta) {
            $jina = $ta['jina'];
            $pepe = $ta['pepe'];
        }
    } else {
        header("location: error.php?error=Fail to read your session data.&action=Sign in&url=signin.php");
        exit;
    }
    
// } else {
//     header("location: error.php?error=Your Session has been expire!&action=Sign in&url=signin.php");
//     exit;
// }
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Patrick, Contractor, civil Enginer, Patrick Contractor, Electrician">
    <meta name="description" content="Patrick Contractor is Registed Company from Tanzania deals with building constraction, cctv installation and Electrical installation.">
    <meta name="title" content="Patrick Contractor's">
    <meta name="author" content="SAM OCHU">
    <title>PATRICK CONTRACTOR'S | CONTACT FORM</title>
    <link rel="stylesheet" href="assets/css/remix.css">
    <link rel="stylesheet" href="./assets/css/icon.css">
    <link rel="stylesheet" href="./assets/css/sign.css">
    <script src="assets/js/app.json" type="application/Id+json"></script>
</head>
<body id="reg">
    <div class="contact-container">
        <form action="system/contact.php" method="post">
            <div class="upya">
                <div class=""></div>
                <h3>Contact form</h3>
                <div class="">
                    <div class=""></div>
                <!-- <a href="signin.php">Sign in</a> -->
                </div>
            </div>
            
            <div class="wrap">
                <label for="username">Username</label><br>
                <div class="input-box" id="name">
                    <input type="text" name="username" value="<?php echo $jina; ?>" id="username" autofocus capitalized required><img src="icons/User & Faces/user-line.svg" class="icon" alt="user" width="20rem">
                </div>
            </div>

            <div class="wrap">
                <label for="email">email</label><br>
                <div class="input-box" id="box3">
                    <input type="email" name="email" id="email" value="<?php echo $pepe; ?>" autocomplete="@gmail.com" required><span id="show"><img src="icons/Business/mail-line.svg" width="20rem" class="icon" alt="email"></span>
                </div>
            </div>

            <div class="wrapu">
                <label for="username">Message</label><br>
                <div class="input-box" id="box2">
                    <textarea type="text" name="message" id="password" class="user-message" placeholder="Write your message here..." autofocus capitalized required></textarea><img src="icons/Business/inbox-line.svg" class="icon" alt="user" width="20rem">
                </div>
            </div>

            <button type="submit" class="btn-text" >Send message</button>
            <div class=""></div>
        </form>
    </div>
    <script src="assets/js/sign.js"></script>
</body>
</html>