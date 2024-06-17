<?php
require_once 'config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $msimbo = $_POST['password'];
    $jina = $username;

    $jibu = mysqli_query($conn, "SELECT * FROM `users` WHERE jina = '$jina'");
    
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
            $_SESSION['user_id'] = $orodha['id'];
            $_SESSION['username'] = $orodha['jina'];

            header("location: ../dashboard.php");
            exit();
        } else {
            $error = "Wrong password";
            header("location: ../error.php?error=$error&action=try again&url=signin.php");
            exit();
        }

    } else {
        $error = "user not found!";
        header("location: ../error.php?error=$error&action=try again&url=signin.php");
        exit();
    }
}
mysqli_close($conn);
?>