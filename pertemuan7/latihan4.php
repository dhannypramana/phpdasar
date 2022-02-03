<?php 
    if (!isset($_POST["submit"])) :
        header("Location: latihan3.php");
        exit();
    endif;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Selamat Datang, <?= $_POST["nama"]?></h1>
    <p>Password kamu <?= $_POST["password"]?></p>
</body>
</html>