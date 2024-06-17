<?php
function input() {
    escapeshellarg();
    escapeshellcmd();
    curl_escape();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jina = input($_POST['name']);

    echo $name;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validation.php" method="post">
        <input type="text" name="name"><br>
        <button type="submit">show</button>
    </form>
</body>
</html>