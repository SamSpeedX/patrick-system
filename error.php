<?php
if (isset($_GET['error'])) {
    $succes = $_GET['error'];
}
if (isset($_GET['url'])) {
    $url = $_GET['url'];
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
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
    <title>Error.</title>
    <link rel="stylesheet" href="assets/css/loading.css">
    <script src="assets/js/app.json" type="application/Id+json"></script>
    <style>
        body {
            color: white;
            background-color: blueviolet;
            /* background-image: linear-gradient(lightblue,rgb(201, 86, 247)); */
        }

        .container {
            width: 100%;
            height: 90dvh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cont {
            text-align: center;
        }

        .back {
            width: 5rem;
            height: 2rem;
            color: white;
            background-color: blue;
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>
<div class="lod f" id="loder">
            <div class="container">
                <div class="content">
                    <img src="icons/System/loader-5-line.svg" alt="" width="90rem"> 
                    <div class="logo">PATRICK CONTRACTOR'S</div>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="cont">
            <h1>Something Went wrong.</h1>
            <p>
                <?php echo $succes; ?>
            </p>
            <button onclick="window.location.href='<?php echo $url; ?>'" class="back"><?php echo $action; ?></button>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/succesful.js"></script>
</body>
</html>