<?php 
    require "functions.php";

    if (isset($_POST["register"])) {
        if(register($_POST) > 0){
            echo "
                <script>
                    alert('Berhasil Mendaftar');
                </script>
            ";
        }  else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Registrasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .container {
            width: 600px;
        }

        .heading-1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="heading-1 mb-3 mt-5">Halaman Registrasi</h1>
        
        <form action="" method="post">
            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="confirmation-password">Konfirmasi Password</label>
                <input class="form-control" type="password" name="confirmation-password" id="confirmation-password" required>
            </div>
            <button class="btn btn-primary mt-3" type="register" name="register">Register</button>
        </form>  
    </div>
</body>
</html>