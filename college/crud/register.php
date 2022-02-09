<?php 
    require "functions.php";

    if (isset($_POST["submit-register"])) {
        if(register($_POST) > 0){
            echo "
                <script>
                    alert('User has been added');
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('failed to add users');
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'Quicksand';
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form{
            border: 1px solid gray;
            border-radius: 10px;
            box-shadow: 10px 10px 10px 5px lightgray;
            padding: 30px;
            flex-basis: 60%;
        }

        a{
            text-decoration: none;
        }

        .anchor-text{
            margin-top: 10px;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="form">
        <h1>Register</h1>
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">E-Mail</label>
                <input type="text" name="email" id="email" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="confirmation-password" class="form-label">Konfirmasi Password</label>
                <input type="password" name="confirmation-password" id="confirmation-password" class="form-control" autocomplete="off" required>
            </div>
            <button class="btn btn-primary mt-3" name="submit-register">Register</button>
            <p class="anchor-text">Already have an account? <a href="login.php">Login Now</a></p>
        </form>
    </div>
</body>
</html>