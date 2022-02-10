<?php 
    require "../functions.php";
    $keyword = $_GET["keyword"];

    $rows = query("SELECT * FROM books WHERE titile LIKE '%$keyword%' OR type LIKE '%$keyword%'");
?>

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
        endforeach;
    ?>
</table>