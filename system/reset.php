<?php
session_start();
require_once 'config.php';

function token($urefu = 10) {
    return bin2hex(random_bytes($urefu));
}
$otp = token();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uid = $_POST['ID'];
    $pepe = $_POST['email'];

    echo $uid;
    echo $pepe;
    $cheki = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$uid'");

    if ($cheki->num_rows === 1) {
        echo "win";
        $orodha = mysqli_fetch_assoc($cheki);
        $jina = $orodha['jina'];
        $barua = $orodha['pepe'];

        if ($pepe == $barua) {
            error_reporting(-1);
            ini_set('display_errors', 'On');
            set_error_handler("var_dump");
            
            ini_set("mail.log", "/tmp/mail.log");
            ini_set("mail.add_x_header", TRUE);
            
            $to = "$pepe";
            $subject = 'Password Reset link';
            $message = "Hello $jina\n\n You have request link to change your password on PATRICK CONTRACTOR'S system, if not you please Delete this Email.\n\n\n Here's your reset link https://patrickcontractors.com/password.php?otp=$otp \n\n\n\n If you get problems on link copy the following OTP: $otp \n\n\n\n\n Thanks for choosing PATRICK CONTRACTOR'S";
            $headers = implode("\r\n", [
            'From: info@patrick.com',
            'Reply-To: samochuu@gmail.com',
            'X-Mailer: PHP/' . PHP_VERSION
            ]);
    
            $result = mail($to, $subject, $message, $headers);

            if (!$result) {
                header("location: ../password.php?otp=$otp");
                exit;
            } else {
                header("location: ../error.php?error=Fail to send reset link please try again");
                exit;
            }
        } else {
            header("location: ../error.php?error=Email not valid");
            exit;
        }

    } else {
        header("location: ../error.php?error=Fail to get Your data.");
        exit;
    }
    
} else {
    header("location: ../error.php?error=Something went wrong when server submit your data");
    exit;
}