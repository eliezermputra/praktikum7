<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "db_bt";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check Connection
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
$sql = "CREATE TABLE buku_tamu (
    id_bt INT(10) PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    notelp INT(15) NOT NULL,
    isi text
    )"; 
    if(mysqli_query($conn, $sql)) {
        echo "Table Berhasil dibuat";
    } else {
        echo "Error : Tabel Gagal dibuat".mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>