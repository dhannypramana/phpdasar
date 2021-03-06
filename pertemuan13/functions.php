<?php 
    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    
    function query($query) {
        // Query Data
        global $conn;
        $result = mysqli_query($conn, $query);
        
        // Fetch Data
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $email = htmlspecialchars($data["email"]);
        $prodi = htmlspecialchars($data["prodi"]);

        // Upload Gambar
        $gambar = upload();

        if(!$gambar){
            return false;
        }

        $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp', '$email', '$prodi', '$gambar')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload()
    {
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        if ($file_error === 4) {
            echo "
                <script>
                    alert('No Image Uploaded');
                </script>
            ";

            return false;
        }

        $allowed_file_type = ['jpg', 'jpeg', 'png'];
        $imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
        
        if (!in_array($imageFileType, $allowed_file_type)){
            echo "
                <script>
                    alert('Uploaded File is Not an Image');
                </script>
            ";
            
            return false;
        }

        if ($file_size > 1000000) {
            echo "
            <script>
                alert('Uploaded File is too large');
            </script>
            ";
            
            return false;
        }

        // Upload Image
        $uniq_id = uniqid();
        move_uploaded_file($tmpName, 'img/' . $uniq_id .".". $imageFileType);

        return $uniq_id. "." .$imageFileType;
    }

    function delete($id){
        global $conn;
        $query = "DELETE FROM mahasiswa WHERE id = $id";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function edit($data, $id, $gambarLama)
    {
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $email = htmlspecialchars($data["email"]);
        $prodi = htmlspecialchars($data["prodi"]);

        if ($_FILES["gambar"]["error"] === 4) {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
            
            if (!$gambar) {
                return false;
            }
        }

        $query = "UPDATE mahasiswa SET nama = '$nama', nrp = '$nrp', email = '$email', prodi = '$prodi', gambar = '$gambar' WHERE id=$id";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>