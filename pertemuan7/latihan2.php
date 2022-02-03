<?php 
    // function isset() untuk mengecek apakah sebuah variabel sudah pernah dibuat atau belum
    if (!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["prodi"]) || !isset($_GET["email"]) || !isset($_GET["gambar"])) {
        // Redirect
        header("Location: latihan1.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Detail Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <ul>
        <li><img src="img/<?=$_GET["gambar"]?>"></li>
        <li><?=$_GET["nama"]?></li>
        <li><?=$_GET["nim"]?></li>
        <li><?=$_GET["prodi"]?></li>
        <li><?=$_GET["email"]?></li>
    </ul>

    <a href="latihan1.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>