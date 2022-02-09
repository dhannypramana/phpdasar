<?php 
    $conn = mysqli_connect("localhost","root","","library");

    function query($query) {
        global $conn;
        $rows = [];
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function search($keyword) {
        global $conn;

        $result = query("SELECT * FROM books WHERE titile LIKE '%$keyword%' OR type LIKE '%$keyword%'");

        return $result;
    }

    function edit($id, $datas) {
        global $conn;

        $title = htmlspecialchars($datas["title"]);
        $type = htmlspecialchars($datas["type"]);

        $query = "UPDATE books SET titile='$title', type='$type' WHERE id=$id";
        $result = mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function add($datas) {
        global $conn;
        $title = htmlspecialchars($datas["title"]);
        $type = htmlspecialchars($datas["type"]);

        $query = "INSERT INTO books VALUES ('', '$title', '$type')";
        $result = mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function delete($id) {
        global $conn;

        $query = "DELETE FROM books WHERE id=$id";
        $result = mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function register($datas) {
        global $conn;

        $username = htmlspecialchars($datas["username"]);
        $email = htmlspecialchars($datas["email"]);
        $password = htmlspecialchars($datas["password"]);
        $confirmation_password = htmlspecialchars($datas["confirmation-password"]);
    
        if ($password !== $confirmation_password) {
            echo "
                <script>
                    alert('Password confirmation not matching');
                </script>
            ";

            return false;
        }

        $query = "SELECT username FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_affected_rows($conn)){
            echo "
                <script>
                    alert('User already exist');
                </script>
            ";

            return false;
        }

        // Password Hashing
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users VALUES ('', '$username', '$password', '$email')";
        $result = mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function login($datas) {
        global $conn;

        $username = htmlspecialchars($datas["username"]);
        $password = htmlspecialchars($datas["password"]);

        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        
        // If username didnt exist
        if (mysqli_affected_rows($conn) < 1) {
            return false;
        }

        // if password didnt match
        if (!password_verify($password, $row["password"])) {
            return false;
        }

        return true;
    }
?>