<?php
include("connect.php");

if (isset($_POST['daftar'])) {
    $idp     = $_POST['idpg'];
    $namap   = $_POST['namapg'];
    $nop  = $_POST['nopg'];
    $jabpeg   = $_POST['jabpeg'];
    $emailp = $_POST['emailpg'];
    $jkp    = $_POST['jkpg'];
    $alamat    = $_POST['alamatpg'];
    $ket    = $_POST['ketpeg'];


    $sql = "INSERT INTO pegawai(idpg,namapg,nopg,jabpeg,emailpg,jkpg,alamatpg,ketpeg) VALUE ('$idp','$namap','$nop','$jabpeg','$emailp','$jkp','$alamat','$ket')";

    $query = mysqli_query($conn,$sql);

    
    if( $query ) {
        header('Location: tampilan.php?status=sukses');
    } else {
        header('Location: tampilan.php?status=gagal');
    }
} else {
    die("ERROR");
}

?>