<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container {
            width: 400px;
        }
    </style>
</head>
<body>
    <?php 
        if (isset($_POST["submit"])) :
    ?>
            <h1>Hello, Selamat Datang <?=$_POST["nama"]?></h1>
    <?php endif;?>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="inputName" class="form-label">Masukkan Nama</label>
                <input class="form-control" type="text" name="nama">

                <label for="inputPassword" class="form-label">Masukkan Password</label>
                <input class="form-control" type="password" name="password">
                <!-- name="nama" -> akan menjadi KEY -->
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>