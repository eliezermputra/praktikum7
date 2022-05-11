<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "webdat";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if (!$conn) {
    die("Erorr : Gagal Terhubung".$dbname.mysqli_connect_error());
}else {
    echo "Database : ".$dbname." : Terhubung!";
}
?>