<?php
$conn = mysqli_connect('localhost', 'root', '', 'patrick');

if (!$conn) {
    die("fail" . "<br>" . mysqli_connect_error());
}
// session_start();
// $jina = "juma";
// $result = mysqli_query($conn, "SELECT * FROM `users` WHERE jina = '$jina'");

// $d = mysqli_fetch_assoc($result);
// echo $d['jina'];
?>