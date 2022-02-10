<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Belajar GET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container {
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="proses.php?<?=$_GET["username"]?>&<?=$_GET["password"]?>" method="get">
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
</body>
</html>