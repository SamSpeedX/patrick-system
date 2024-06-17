<?php
$conn = mysqli_connect('localhost', 'root', '', 'patrick');

if (!$conn) {
    die("fail" . "<br>" . mysqli_connect_error());
}
?>