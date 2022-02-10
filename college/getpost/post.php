<?php 
    $mahasiswa = [];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biodata Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container {
            width: 700px;
        }
    </style>
</head>
<body>
    <form method="post" class="container">
        <h1>Biodata Mahasiswa</h1>
        <div class="form-group mb-3">
            <label for="nama">Nama : </label>
            <input class="form-control" type="text" name="nama" id="nama">
        </div>
        <div class="form-group mb-3">
            <label for="jenis-kelamin">Jenis Kelamin : </label>
            <select class="form-control" name="jenis-kelamin" id="jenis-kelamin">
                <option>Laki - Laki</option>
                <option>Perempuan</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="nomor-hp">Nomor HP : </label>
            <input class="form-control" type="number" name="nomor-hp" id="nomor-hp">
        </div>
        <div class="form-group mb-3">
            <label for="alamat">Alamat : </label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
        </div>
        <!-- <div class="form-group mb-3">
            <label for=" foto">Foto : </label>
            <div class="form-control">
                <input class="form-control-file" type="file" name="foto" id="foto">
            </div>
        </div> -->
        <button class="btn btn-primary mb-3" type="submit" name="submit">Simpan</button>
    </form>

    <table class="container table table-bordered">
        <?php 
            if (isset($_POST["submit"])) :
                $number = 0;
                $mahasiswa[$number]["nama"] = $_POST["nama"];
                $mahasiswa[$number]["jenis-kelamin"] = $_POST["jenis-kelamin"];
                $mahasiswa[$number]["nomor-hp"] = $_POST["nomor-hp"];
                $mahasiswa[$number]["alamat"] = $_POST["alamat"];
        ?>
        <tr>
            <th>Nama</th>
            <td><?= $mahasiswa[$number]["nama"]?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?= $mahasiswa[$number]["jenis-kelamin"]?></td>
        </tr>
        <tr>
            <th>Nomor HP</th>
            <td><?= $mahasiswa[$number]["nomor-hp"]?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?= $mahasiswa[$number]["alamat"]?></td>
        </tr>
        <?php endif;?>
    </table>
</body>
</html>