<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $otp = $_POST['otp'];

    header("location: reset.php?otp=". $otp);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Patrick, Contractor, civil Enginer, Patrick Contractor, Electrician">
    <meta name="description" content="Patrick Contractor is Registed Company from Tanzania deals with building constraction, cctv installation and Electrical installation.">
    <meta name="title" content="Patrick Contractor's">
    <meta name="author" content="SAM OCHU">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/js/app.json" type="application/Id+json"></script>
</head>
<body>
    <form action="link.php" method="post">
        <input type="text" name="otp" id="otp">
        <input type="submit" value="change">
    </form>
</body>
</html>