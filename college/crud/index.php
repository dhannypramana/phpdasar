<?php 
    session_start();

    if (!isset($_SESSION["login"])) {
        header('Location: login.php');
    }
    
    require "functions.php";

    $rows = query("SELECT * FROM books");
    $rows_image = query("SELECT * FROM images");

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

        img{
            width: 200px;
            height: 160px;
            object-size: cover;
            object-position: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        figcaption > .btn {
            width: 100%;
        }

        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div class="header">
            <div class="panel">
                <h1>Library <?=$_SESSION["username"]?>'s</h1>

                <!-- Searching Forms -->
                <form action="" method="post" class="form">
                    <div class="form-group">
                        <label class="form-label" for="keyword">Search Books</label>
                        <input class="form-control" type="text" name="keyword" id="keyword" autofocus autocomplete="off">
                    </div>
                    <!-- <button class="btn btn-primary mt-3 mb-3" type="submit" name="submit-keyword" id="submit-keyword">Search</button> -->
                    <a class="btn btn-primary mt-3" href="add.php">Add Books</a>
                </form>
                <!-- Searching Forms -->
            </div>
            <div class="nav">
                <a href="logout.php" class="btn btn-danger logout">Logout</a>
            </div>
        </div>

        <!-- Data Tables -->
        <div id="table-container"> <!-- Requirement for AJAX-->
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
        </div>

        <div class="gallery mt-3 mb-3">
            <h1>Gallery</h1>
            <a class="btn btn-primary mb-3" href="add_image.php">Add Images</a>
            <div class="gallery-container">
                <?php foreach ($rows_image as $image) : ?>
                <figure>
                    <img src="img/<?=$image["name"]?>">
                    <figcaption><a href="delete_image.php?id=<?=$image["id"]?>&name=<?=$image["name"]?>" onclick="return confirm('Delete Image?')" class="btn btn-danger">Delete</a></figcaption>
                </figure>
                <?php endforeach;?>
            </div>
        </div>

    </div>

    <script src="js/script.js"></script>
</body>
</html>