<?php 
    // Variabel Scope
    // Globals
    $x = 10;

    function tampilX()
    {
        global $x;
        echo $x;
    }

    // tampilX();

    // Superglobals
    // Variabel global yang sudah dimiliki php, bisa diakses di mana pun
    // $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV => tipe nya Array Assosiatif
    // Yang akan di bahas: GET, POST, SESSION, COOKIE
    // echo $_SERVER["SERVER_NAME"];

    // $_GET
    $mahasiswa = [
        [
            "nama" => "Dhanny Adhi Pramana",
            "nim" => "118140182",
            "email" => "p.dhannypramana@gmail.com",
            "prodi" => "Teknik Informatika",
            "gambar" => "1.jpg"
        ],

        [
            "nama" => "Oracle Abdul",
            "nim" => "118140198",
            "email" => "p.oracle@gmail.com",
            "prodi" => "Teknik Kelautan",
            "gambar" => "2.jpg"
        ],
        [
            "nama"=> "Dodi Pramana", 
            "nim" => "118140177",
            "email" => "p.dodipramana@gmail.com",
            "prodi" => "Teknik Informatika", 
            "gambar" => "3.jpg"
        ],
        [
            "nama" => "John Doe", 
            "nim" => "118140172", 
            "prodi" => "Teknik Informatika", 
            "email" => "p.john@gmail.com",
            "gambar" => "4.jpg"
        ],
        [
            "nama" => "Maria Koko", 
            "nim" => "118140185", 
            "prodi" => "Teknik Informatika", 
            "email" => "p.maria@gmail.com",
            "gambar" => "5.jpg"
        ],
        [
            "nama" => "Mitchy Doo", 
            "nim" => "118140198", 
            "prodi" => "Teknik Kelautan", 
            "email" => "p.Doo@gmail.com",
            "gambar" => "6.jpg"
        ]
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        img {
            width: 100px;
            height: 100px;
            object-position: center;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $student) : ?>
            <li><a href="latihan2.php?nama=<?=$student["nama"]?>&nim=<?=$student["nim"]?>&email=<?=$student["email"]?>&prodi=<?=$student["prodi"]?>&gambar=<?=$student["gambar"]?>"><?= $student["nama"];?></a></li>
        <?php endforeach;?>
    </ul>
</body>
</html>