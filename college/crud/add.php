<?php 
    require "functions.php";

    if (isset($_POST["submit"])) {
        add($_POST);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Add Data</h1>
        <form action="" method="post">
            <div class="form-group">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="type">type</label>
                <input class="form-control" type="text" name="type" id="type" required>
            </div>

            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>