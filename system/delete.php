<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uid = $_POST['uid'];
    $msimbo = $_POST['password'];

    $angalia = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$uid'");

    if (!$angalia->num_rows === 1) {
        $error = "fail to get your data!";
        header("location: ../error.php?error=$error");
        exit;
    } else {
        $hakiki = mysqli_fetch_assoc($angalia);
        
        if (password_verify($msimbo, $hakiki['msimbo'])) {
            $futa = mysqli_query($conn, "DELETE FROM `users` WHERE id='$uid'");

            if ($futa) {
                session_start();
                session_destroy();
                session_abort();
                header("location: ../successful.php?succes=Your Account has been Deleted permanent can't be recovered&action=Go home&url=index.php");
                exit;   
            } else {
                header("location: ../error.php?error=Fail to delete your Account.");
            }
        } else {
            header("location: ../error.php?error=Incorrect password");
        }
        
    }
}
mysqli_close($conn);
?>