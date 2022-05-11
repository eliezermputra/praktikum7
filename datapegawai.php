<?php
include("connect.php");
?>

<!DOCTYPE html>
<head>
    <title>FROM DATA KEPEGAWAIAN</title>
</head>
<body>
    <header>
        <h1>DATAKEPEGAWAIAN SEDERHANA</h1>
    </header>
    <nav>
        <a href="tambah.php">Tambah Baru</a>
    </nav>
    <br>

    <table border = "2px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM datapegawai";
            $query = mysqli_query($conn,$sql);

            while ($pegawai = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$pegawai['idpg']."</td>";
                echo "<td>".$pegawai['namapg']."</td>";
                echo "<td>".$pegawai['nopg']."</td>";
                echo "<td>".$pegawai['jabpeg']."</td>";
                echo "<td>".$pegawai['emailpg']."</td>";
                echo "<td>".$pegawai['jkpg']."</td>";
                echo "<td>".$pegawai['alamatpg']."</td>";
                echo "<td>".$pegawai['ketpeg']."</td>";
                echo "<td align = 'center'><a href='edit.php?id=".$pegawai['idpg']."'>Edit</a> | <a href='bantuhapus.php?id=".$pegawai['idpg']."'>Hapus</a></td>"; 
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query)?></p>
</body>
</html>