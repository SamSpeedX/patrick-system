<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("location: signout.php");
    exit();
}

if (isset($_GET['token'])) {
    $hali = "imehakikishwa";
    $uid = $_SESSION['user_id'];

    $check = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$uid'");

    if (!$check->num_rows === 1) {
        $error = "Fail to get Your data";
        header("location: error.php?error=$error&action=Try again&url=email.php");
    } else {
        $set = mysqli_query($conn, "UPDATE `users` SET hali='$hali' WHERE id='$uid'"); 

        if (!$set->num_rows === 1) {
            $error = "fail to get your data";
            header("location: error.php?error=$error&action=Try again&url=email.php");
        } else {
            $succes = "Your Email has been verified";
            header("location: successful.php?succes=$succes&action=Next&url=dashboard.php");
            exit();
        }
        
    }
}
mysqli_close($conn);
?>