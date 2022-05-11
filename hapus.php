<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM pegawai WHERE idpg = $id";
    $query = mysqli_query($conn,$sql);

    if( $query ){
        header('Location: datapegawai.php');
    } else {
        die("gagal menghapus...");
    }
}

?>