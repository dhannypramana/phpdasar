<?php 
    require "functions.php";

    if(!isset($_GET["id"])){
        header("Location: index.php");
        die;
    }

    $id = $_GET["id"];
    
    $result = mysqli_query($conn, "SELECT * FROM books WHERE id=$id");
    $row = mysqli_fetch_assoc($result);

    if (isset($_POST["submit-edit"])) {
        if(edit($id, $_POST) > 0){
            echo "
                <script>
                    alert('Data successfully changed');
                    window.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('No Data Changed');
                    window.location.href = 'index.php';
                </script>
            ";
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Quicksand';
        }

        a {
            text-decoration: none;
        }

        .form {
            width: 500px;
        }

        .btn {
            flex-basis: 50%;
            margin: 5px;
        }

        .container {
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .btn-container {
            display: flex;
        }
    </style>

</head>
<body>
    <div class="container mt-3">
        <h1>Edit Books</h1>

        <form action="" method="post" class="form">
            <div class="form-group">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" value="<?=$row["titile"]?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="type">Type</label>
                <input class="form-control" type="text" name="type" id="type" value="<?=$row["type"]?>">
            </div>

            <div class="btn-container mt-3">
                <button class="btn btn-primary" type="submit" name="submit-edit">Edit</button>
                <a class="btn btn-warning" href="index.php">Back</a>
            </div>
        </form>
    </div>
</body>
</html>