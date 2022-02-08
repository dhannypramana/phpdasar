<?php 
    require "functions.php";

    if (isset($_POST["login"])) {
        login($_POST);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .body-container{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-wrap{
            border: 1px solid lightgray;
            width: 600px;
            padding: 50px;
            box-shadow: 5px 5px 25px 0 lightgray;
            border-radius: 15px;
        }

        .btn{
            width: 100%;
        }
    </style>

</head>
<body>
    <div class="body-container">
        <div class="form-wrap">
            <h1>Sign In</h1>
    
            <form action="" method="post">
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username" required autocomplete="off">
                </div>
                <div class="form-group mt-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password" required autocomplete="off">
                </div>
                <button class="btn btn-primary mt-4" type="submit" name="login">Sign In</button>
            </form>
        </div>
    </div>

</body>
</html>