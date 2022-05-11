<html>
<head>
    <title>Program Data Pegawai</title>
</head>
<body>
    <header>
        <h1><center>DATA KEPEGAWAIAN SEDERHANA</center></h1>
    </header>
    <h3>Menu</h3>
    <nav>
        <ul>
            <li><a href="tambah.php">Daftar Pegawai Baru</a></li>
            <li><a href="datapegawai.php">Mengubah Data Pegawai</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['loading'])): ?>
    <p>
        <?php
            if($_GET['loading'] == 'berhasil'){
                echo "Pendaftaran Pegawai baru berhasil!";
            } else {
                echo "EROR : Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
</body>
</html>