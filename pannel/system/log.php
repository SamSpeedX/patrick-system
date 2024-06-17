<?php
require_once 'config.php';

session_start();

functio

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = system('ls ' . escapeshellarg($_POST['username'])); 
    $msimbo = system('ls ' . escapeshellarg($_POST['password']));
    $jina = $username;

    if (strlen($username) == 0) {
        $error = "username field is Empty. make sure you have write your username";
        header("location: ../error.php?error=$error&action=try again&url=index.php");
        exit();
    }

    if (strlen($msimbo) == 0) {
        $error = "password field is Empty. make sure you have write your username";
        header("location: ../error.php?error=$error&action=try again&url=index.php");
        exit();
    }

    $chekban = mysqli_query($conn, "SELECT * FROM `bann` WHERE ip = '$uip'");

    $jibu = mysqli_query($conn, "SELECT * FROM `muajiri` WHERE jina = '$jina'");
    
    if ($jibu->num_rows === 1) {
        $orodha = mysqli_fetch_assoc($jibu);

        echo "user";
        echo $msimbo;
        echo "<br>";
        echo "db:  ";
        echo $orodha['msimbo'];
        echo "<br>";
        echo $orodha['pepe'];

        if (password_verify($msimbo, $orodha['msimbo'])) {
            $_SESSION['boss_id'] = $orodha['id'];
            $_SESSION['bossname'] = $orodha['jina'];

            header("location: ../dashboard.php");
            exit();
        } else {
            $error = "Wrong password";
            header("location: ../error.php?error=$error&action=try again&url=index.php");
            exit();
        }

    } else {
        $error = "user not found!! please writte the correct username before get bunned.";
        header("location: ../error.php?error=$error&action=try again&url=index.php");
        exit();
    }
}
mysqli_close($conn);
?>