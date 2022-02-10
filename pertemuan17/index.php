<?php 
    session_start();

    if(!isset($_SESSION["login"])){
        header('Location: login.php');
        exit();
    }
    
    require "functions.php";
    
    $students = query("SELECT * FROM mahasiswa");

    if (isset($_POST["search"])){
        $keyword = $_POST["keyword"];

        $students = query("SELECT * FROM mahasiswa WHERE 
        nama LIKE '%$keyword%' OR
        nrp LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        prodi LIKE '%$keyword%'");
    }
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
        .table {
            text-align: center;
        }

        img {
            width: 100px;
            height: 100px;
        }

        .form-control {
            width: 400px;
        }
    </style>

</head>
<body>
    <div class="container mt-3">
        <a href="logout.php">Logout</a>
        <h1 class="mb-3">Halaman <?=$_SESSION["username"]?></h1>

        <form action="" method="post">
            <div class="form-group">
                <label class="form-label" for="keyword">Search Data</label>
                <input class="form-control" type="text" name="keyword" id="keyword" autofocus placeholder="Cari data Mahasiswa" autocomplete="off">
            </div>
            <button class="btn btn-primary mt-3 mb-3" type="submit" name="search">Cari Data</button>
        </form>

        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>NRP</th>
                <th>E-Mail</th>
                <th>Prodi</th>
                <th>Gambar</th>
            </tr>
            <tr>
                <?php 
                $no_urut = 1;
                foreach ($students as $student) :
                ?>
                <td><?=$no_urut?></td>
                <td>
                    <a class="btn btn-warning" href="edit.php?id=<?=$student["id"];?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?=$student["id"];?>" onclick="return confirm('Hapus Data?')">Delete</a>
                </td>
                <td><?=$student["nama"];?></td>
                <td><?=$student["nrp"];?></td>
                <td><?=$student["email"];?></td>
                <td><?=$student["prodi"];?></td>
                <td><img src="img/<?=$student["gambar"]?>"></td>
            </tr>
            <?php 
                $no_urut+=1; 
                endforeach;
            ?>
        </table>
        <a class="btn btn-primary" href="tambah.php">Tambah Mahasiswa</a><br><br>
    </div>
</body>
</html>