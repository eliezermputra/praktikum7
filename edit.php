<?php
include("connect.php");

//cek id dari form data pegawai
if (!isset($_GET['id'])) {
    header('Location: datapegawai.php');
}

$id = $_GET['id'];

//ambil data berdasarkan id
$sql = "SELECT * FROM pegawai WHERE id_pgw = $id";
$query = mysqli_query($conn,$sql);
$pegawai = mysqli_fetch_assoc($query);

//cek datanya
if (mysqli_num_rows($query) < 1) {
    die("Data Tidak Ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIAPEG</title>
</head>
<body>
    <header>
        <h1>SISTEM INFORMASI KEPEGAWAIAN SEDERGHANA</h1>
    </header>
    <form action="prosesEdit.php" method = "post">
        <fieldset>
        <table>
                <tr>
                <td><label for="idpg">ID Pegawai  </label></td>
                <td><input type="text" name = "idp" placeholder = "ID Kepegawaian" value="<?php echo $pegawai['idpg'] ?> " ></td>
                </tr>
                <tr>
                <td><label for="namapg">Nama Pegawai  </label></td>
                <td><input type="text" name = "namap" placeholder = "ID Departemen" value="<?php echo $pegawai['namapg'] ?> " ></td>
                </tr>
                <tr>
                <td><label for="nopg">No telp</label></td>
                <td><input type="text" name = "nop" placeholder = "ID Kerja" value="<?php echo $pegawai['nopg'] ?> " ></td>
                </tr>
                <tr>
                <td><label for="jabpeg">Jabatan </label></td>
                <td><input type="text" name = "jabpeg" placeholder = "Nama Lengkap" value="<?php echo $pegawai['jabpeg'] ?>"></td>
                </tr>
                <tr>
                <td><label for="emailpg">Email  </label></td>
                <td><input type="text" name = "emailp" placeholder = "Email" value="<?php echo $pegawai['emailpg'] ?>"></td>
                </tr>
                <tr>
                <td><label for="jkpg">Jenis Kelamin  </label></td>
                <td><input type="text" name = "jkp" placeholder = "No Telepon" value="<?php echo $pegawai['jkpg'] ?>"></td>
                <tr>
                <td><label for="alamatpg">Alamat  </label></td>
                <td><input type="text" name = "alamat" placeholder = "Alamat" value="<?php echo $pegawai['alamatpg'] ?>"></td>
                <tr>
                </tr>
                <td><label for="ketpeg">Keterangan  </label></td>
                <td><input type="text" name = "ket" placeholder = "Keterangan" value="<?php echo $pegawai['ketpeg'] ?>"></td>
                <tr>
            </table>
            <input type="submit" value="Simpan" name="update">
        </fieldset>
    </form>
</body>
</html>