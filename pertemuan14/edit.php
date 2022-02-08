<?php 
    require "functions.php";
    
    $id = $_GET["id"];

    $mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

    if (isset($_POST["submit"])) :
        if (edit($_POST, $id, $mhs["gambar"]) > 0) :
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'index.php';
                </script>
            ";
        else :
            echo "
                <script>
                    alert('Data Gagal Diubah');
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
    <title>Ubabh Data Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container{
            width: 500px;
        }

        img {
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Ubah Data Mahasiswa</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input class="form-control" type="text" name="nama" id="nama" value="<?=$mhs["nama"]?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="nrp">NRP</label>
                <input class="form-control" type="text" name="nrp" id="nrp" value="<?=$mhs["nrp"]?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="email">E-Mail</label>
                <input class="form-control" type="text" name="email" id="email" value="<?=$mhs["email"]?>" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mb-3">
                <label for="prodi">Prodi</label>
                <input class="form-control" type="text" name="prodi" id="prodi" value="<?=$mhs["prodi"]?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="gambar">Gambar</label>
                <img class="mb-3" src="img/<?=$mhs["gambar"]?>">
                <input class="form-control" type="file" name="gambar" id="gambar">
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Ubah Data</button>
            <a class="btn btn-warning" href="index.php">Kembali</a>
        </form>
    </div>
</body>
</html>