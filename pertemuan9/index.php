<?php 
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .table-container {
            margin: 25px;
        }

        .table {
            text-align: center;
        }

        img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            object-position: center;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1 class="mt-3">Daftar Mahasiswa</h1>

    <div class="table-container">
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php
                $no_urut = 1;
                foreach ($mahasiswa as $row) :
            ?>
            <tr>
                <td><?=$no_urut;?></td>
                <td>
                    <a href="#">Ubah</a> | 
                    <a href="#">Hapus</a>
                </td>
                <td><img src="img/<?=$row["gambar"]; ?>"></td>
                <td><?=$row["nrp"]; ?></td>
                <td><?=$row["nama"]; ?></td>
                <td><?=$row["email"]; ?></td>
                <td><?=$row["prodi"]; ?></td>
            </tr>
            <?php $no_urut+=1;?>
            <?php endforeach;?>
        </table>
    </div>
</body>
</html>