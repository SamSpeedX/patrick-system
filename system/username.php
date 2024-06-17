<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uid = $_POST['uid'];
    $jina = $_POST['username'];
    $msimbo = $_POST['password'];

    $hakiki = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$uid'");

    if ($hakiki->num_rows === 1) {
        $orodha = mysqli_fetch_assoc($hakiki);

        if (password_verify($msimbo, $orodha['msimbo'])) {
            $badili = mysqli_query($conn, "UPDATE `users` SET jina='$jina' WHERE id = '$uid'");

            if ($badili) {
                header("location: ../successful.php?succes=Username has been changed successful to $jina&action=Go to Profile&url=dashboard.php");
                exit;
            } else {
                header("location: ../error.php?error=Fail to change your username&action=Try again&url=username.php");
                exit;
            }
        } else {
            header("location: ../error.php?error=Incorrect password&action=Try again&url=username.php");
            exit;
        }
    } else {
        header("location: ../error.php?error=Fail to get your data.&action=Try again&url=username.php");
        exit;
    }
} 
?>