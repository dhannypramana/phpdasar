<?php 
    // Connect to DB
    $conn = mysqli_connect("localhost", "root" ,"", "library");

    function query($query)
    {
        global $conn;
        $rows = [];

        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }
    
    function add($data)
    {
        global $conn;
        $title = $data["title"];
        $type = $data["type"];

        $query = "INSERT INTO books VALUES ('', '$title', '$type')";
        mysqli_query($conn, $query);
    }
?>