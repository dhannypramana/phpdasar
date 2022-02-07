<?php 
    require "functions.php";

    $rows = query("SELECT * FROM books");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .table {
            text-align: center;
        }
        .action {
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <h1>Books Data</h1>    
        <table class="table table-bordered">
            <tr>
                <th class="action">Action</th>
                <th>Title</th>
                <th>Type</th>
            </tr>
            <?php foreach ($rows as $row) :?>
                <tr>
                    <td>
                        <a class="btn btn-warning" href="#">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </td>
                    <td><?=$row["titile"]?></td>
                    <td><?=$row["type"]?></td>
                </tr>
            <?php endforeach;?>
        </table>

        <a class="btn btn-primary" href="add.php">Add Data</a>
    </div>
</body>
</html>