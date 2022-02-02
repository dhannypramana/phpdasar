<?php 
    $students = [
        ["Dhanny Pramana", "118140182", " Teknik Informatika", " p.dhannypramana@gmail.com"], 
        ["Achmad Ferdi", "118140172", " Teknik Informatika", " p.ferdi@gmail.com"],
        ["Yosia Gilbert", "118140185", " Teknik Informatika", " p.gilbert@gmail.com"],
        ["Netiawan Ferdi", "118140198", " Teknik Kelautan", " p.nesti@gmail.com"]
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Daftar Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($students as $student) : ?>
        <ul>
            <?php foreach ($student as $s) : ?>
                <li><?= $s; ?></li>
            <?php endforeach;?>
        </ul>
    <?php endforeach;?>
</body>
</html>