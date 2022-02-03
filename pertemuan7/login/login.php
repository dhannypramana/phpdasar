<?php 
    // Cek apakah tombol sudah ditekan atau belum
    if (isset($_POST["submit"])) {
        if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
            header("Location: admin.php");
            exit();
        } else {
            $ERROR = true;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container {
            width: 500px;
            margin-top: 50px;
        }

        h2 {
            color: red;
            text-align: center;
            font-style: italic;
            margin-top: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login Admin</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label" for="username">Masukkan Username</label>
                <input class="form-control" type="text" name="username" id="username">
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="password">Masukkan Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>
    
    <?php if (isset($ERROR)): ?>
        <h2>Username/Password salah</h2>
    <?php endif;?>
</body>
</html>