<?php
require_once 'config.php';


$sql = "SELECT * FROM viwers";

$result = $conn->query($sql);

$views = $result->num_rows;

echo $views;

$vw = mysqli_query($conn, "SELECT * FROM `viwers`");

if ($vw) {
    $watu = $vw->num_rows;
}