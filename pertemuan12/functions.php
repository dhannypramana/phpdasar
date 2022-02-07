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
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp', '$email', '$prodi', '$gambar')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function delete($id){
        global $conn;
        $query = "DELETE FROM mahasiswa WHERE id = $id";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function edit($data, $id)
    {
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $email = htmlspecialchars($data["email"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "UPDATE mahasiswa SET nama = '$nama', nrp = '$nrp', email = '$email', prodi = '$prodi', gambar = '$gambar' WHERE id=$id";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>