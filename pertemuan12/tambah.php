<?php 
    require "functions.php";

    if (isset($_POST["submit"])) :
        if (tambah($_POST) > 0) :
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        else :
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        endif;
    endif;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tambah Data Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container{
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Data Mahasiswa</h1>
        <form action="" method="post">
            <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input class="form-control" type="text" name="nama" id="nama" required>
            </div>
            <div class="form-group mb-3">
                <label for="nrp">NRP</label>
                <input class="form-control" type="text" name="nrp" id="nrp" required>
            </div>
            <div class="form-group mb-3">
                <label for="email">E-Mail</label>
                <input class="form-control" type="text" name="email" id="email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mb-3">
                <label for="prodi">Prodi</label>
                <input class="form-control" type="text" name="prodi" id="prodi" required>
            </div>
            <div class="form-group mb-3">
                <label for="gambar">Gambar</label>
                <input class="form-control" type="file" name="gambar" id="gambar">
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Tambah Data</button>
            <a class="btn btn-warning" href="index.php">Kembali</a>
        </form>    
    </div>
</body>
</html>