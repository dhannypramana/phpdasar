<?php
    // Array Assosiatif
    // Pasangan Antara Key dengan Value
    // Dimana Key nya adalah String yang kita buat sendiri

    $mahasiswa = [
        [
            "nama" => "Dhanny Adhi Pramana",
            "nim" => "118140182",
            "email" => "p.dhannypramana@gmail.com",
            "prodi" => "Teknik Informatika",
            "gambar" => "1.jpg"
        ],

        [
            "nama" => "John Doe",
            "nim" => "118140198",
            "email" => "p.john@gmail.com",
            "prodi" => "Teknik Kelautan",
            "gambar" => "2.jpg"
        ]
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Assosiatif Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        img {
            width: 100px;
            height: 100px;
            object-position: center;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
        <?php foreach ($mahasiswa as $student) : ?>
            <ul>
                <li><img src="img/<?php echo $student{"gambar"}?>"></li>
                <li><?php echo $student["nama"]?></li>
                <li><?php echo $student["nim"]?></li>
                <li><?php echo $student["email"]?></li>
                <li><?php echo $student["prodi"]?></li>
            </ul>
        <?php endforeach;?>
</body>
</html>