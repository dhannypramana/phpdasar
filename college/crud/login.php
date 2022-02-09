<?php 
    require "functions.php";

    if (isset($_POST["submit-login"])) {
        if(login($_POST) > 0){
            $username = $_POST["username"];
            header("Location: index.php?username=$username");
        } else {
            echo "
                <script>
                    alert('Username/Password wrong');
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
            flex-basis: 55%;
        }
        
        .anchor-text{
            margin-top: 10px;
            margin-bottom: 0;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="form">
        <h1>Login</h1>
            <div class="form-group">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" autocomplete="off" required>
            </div>
            <button class="btn btn-primary mt-3" name="submit-login">Login</button>
            <p class="anchor-text">Dont have an account? <a href="register.php">Register Now</a></p>
        </form>
    </div>
</body>
</html>