<?php
    /*
    Pertemuan 2  - PHP Dasar
    SintaksPHP
    */

    // 1. Standard Output (echo, print, print_r(for array, debugging), var_dump(for debugging))
    // echo "Dhanny Adhi Pramana";

    // 2. Variabel dan Tipe Data
    $nama = "Dhanny Adhi Pramana";

    // 3. Operator
    /*
    Aritmatika (+,-,*,%)
    Penggabung String/Concate (.)
    Assignment (=, +=, -=, *=, /=, %= , .=)
    Perbandingan (>, <, >=, <=, ==m !=)
        Identitas (===,  !==)
    Logika (&&, ||, !)
    */
    $nama_depan = "Dhanny";
    $nama_belakang = "Pramana";
    echo $nama_depan." ".$nama_belakang;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Dasar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Hello, Selamat Datang <?php echo $nama; ?></h1>    
</body>
</html>