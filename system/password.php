<?php
session_start();
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD']) {
    $pepe = $_POST['email'];
    $new = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $uid = $_SESSION['user_id'];

    $kagua = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$uid'");

    if ($kagua->num_rows == 1) {
        $print = mysqli_fetch_assoc($kagua);
        $barua = $print['pepe'];

        if ($barua !== $pepe) {
            $error = "Email not Valid";
            header("location: ../error.php?error=$error&action=Try again&url=../password.php");
        } else {
            $weka = mysqli_query($conn, "UPDATE`users` SET `msimbo`='$new'");

            if (!$weka) {
                $error = "Fail to reset your password please try again";
                header("location: ../error.php?error=$error&action=Try again&url=../password.php");
            } else {
                error_reporting(-1);
                ini_set('display_errors', 'On');
                set_error_handler("var_dump");
                
                ini_set("mail.log", "/tmp/mail.log");
                ini_set("mail.add_x_header", TRUE);
                
                $to
                = "$pepe";
                $subject = 'Password Change';
                $message = "Hello $jina\n\n Your password has been changed.\n\n if not you please follo the following link to recover your password \n\n\n\n\n Thanks for choosing PATRICK CONTRACTOR'S";
                $headers = implode("\r\n", [
                'From: info@patrick.com',
                'Reply-To: samochuu@gmail.com',
                'X-Mailer: PHP/' . PHP_VERSION
                ]);
        
                $result = mail($to, $subject, $message, $headers);
                
                if (!$result) {
                    $succes = "Your password has been changed Successful.";
                    header("Location: ../successful.php?succes=$succes&action=Try again&url=dashboard.php");
                    exit;
                }
            }
            
        }
        
    }
}
mysqli_close($conn);
?>