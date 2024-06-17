<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jina = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $uip = $_SERVER['REMOTE_ADDR'];

    $kagua = mysqli_query($conn, "SELECT * FROM `users` WHERE jina = '$jina'");

    if ($kagua->num_rows === 1) {
        $error = "Username is Already Taken!";
        header("location: ../error.php?error='$error'&action=try again&url=signup.php");
        exit();

    } else {
        $weka = mysqli_query($conn, "INSERT INTO `users` (`jina`, `msimbo`, `pepe`, `ip`, `hali`) VALUE ('$jina', '$password', '$email', '$uip', 'haijahakikishwa')");

        $succes = "Username is Available.";
        // header("location: ../successful.php?succes='$succes'");
        header("location: ../successful.php?succes=Your Account has been Created successful sign in to your account now&action=Sign in&url=signin.php");
        exit();
    }
}
mysqli_close($conn);
?>