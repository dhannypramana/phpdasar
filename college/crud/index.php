<?php 
    require "functions.php";

    $rows = query("SELECT * FROM books");

    if(isset($_POST["submit-keyword"])){
        $keyword = $_POST["keyword"];
        $rows = search($keyword);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library</title>
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

        .action {
            width: 300px;
        }

        .title{
            width: 500px;
        }

        h1{
            width: fit-content;
        }

        .form{
            width: 350px;
        }

        .header{
            display: flex;
        }

        .panel{
            flex-basis: 50%;
        }

        .nav {
            flex-basis: 50%;
            display: flex;
            flex-direction:row-reverse;
        }

        .logout {
            height: 40px;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="header">
            <div class="panel">
                <?php if (!isset($_GET["username"])): ?>
                <h1>Library</h1>
                <?php else :?>
                <h1>Library <?=$_GET["username"]?>'s</h1>
                <?php endif;?>

                <!-- Searching Forms -->
                <form action="" method="post" class="form">
                    <div class="form-group">
                        <label class="form-label" for="keyword">Search Books</label>
                        <input class="form-control" type="text" name="keyword" id="keyword" autofocus autocomplete="off">
                    </div>
                    <button class="btn btn-primary mt-3 mb-3" type="submit" name="submit-keyword">Search</button>
                </form>
            </div>
            <div class="nav">
                <a href="login.php" class="btn btn-danger logout">Logout</a>
            </div>
        </div>

        <!-- Data Tables -->
        <table class="table">
            <tr>
                <th>No.</th>
                <th class="action">Action</th>
                <th class="title">Title</th>
                <th>Type</th>
            </tr>
            <?php 
                $number = 1; 
                foreach ($rows as $row) :?>
            <tr>
                <td><?=$number?></td>
                <td>
                    <a href="edit.php?id=<?=$row["id"]?>">Edit</a> | 
                    <a href="delete.php?id=<?=$row["id"]?>" onclick="return confirm('Delete Data?')">Delete</a>
                </td>
                <td><?=$row["titile"]?></td>
                <td><?=$row["type"]?></td>
            </tr>
            <?php 
                $number+=1; 
                endforeach;?>
        </table>

        <a class="btn btn-primary" href="add.php">Add Books</a>
    </div>
</body>
</html>