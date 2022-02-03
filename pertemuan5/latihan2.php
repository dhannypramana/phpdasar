<?php 
    $arrs = [3,6,9,1,12,56,89,34,23];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .box  {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            line-height: 50px;
            background-color: salmon;
            color: white;
            margin: 3px;
            transition: 1s;
        }

        .box:hover  {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .container {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php foreach ($arrs as $arr) : ?>
            <div class="box"><?= $arr;?></div>
        <?php endforeach;?>
    </div>
</body>
</html>