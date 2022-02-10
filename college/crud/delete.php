<?php 
    session_start();

    if (!isset($_SESSION["login"])) {
        header('Location: login.php');
    }
    
    require "functions.php";

    if(!isset($_GET["id"])){
        header("Location: index.php");
    }

    $id = $_GET["id"];
    if (delete($id) > 0) {
        echo "
            <script>
                alert('Data has been deleted');
                window.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data failed to delete');
                window.location.href = 'index.php';
            </script>
        ";
    }
?>