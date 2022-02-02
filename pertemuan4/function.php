<?php 
    function greetings($fwaktu = "Datang", $fname = "Administrator")
    {
        return "Selamat $fwaktu, $fname!";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan Function</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1><?php echo greetings(); ?></h1>
</body>
</html>