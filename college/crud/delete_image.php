<?php 
    require "functions.php";

    if(!isset($_GET["id"])){
        header("Location: index.php");
    }

    $id = $_GET["id"];
    if (delete_image($id) > 0) {
        echo "
            <script>
                alert('Image has been deleted');
                window.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Image failed to delete');
                window.location.href = 'index.php';
            </script>
        ";
    }
?>