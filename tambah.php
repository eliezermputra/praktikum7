<!DOCTYPE html>
<html>
<head>
    <title>DATA Pegawai</title>
</head>
<body>
    <header>
        <h1>DATA KEPEGAWAIAN</h1>
    </header>
    <form action="bantutambah.php" method = "post">
        <fieldset>
            <table>
                <tr>
                <td><label for="idpg">ID Pegawai  </label></td>
                <td><input type="text" name = "idp"></td>
                </tr>
                <tr>
                <td><label for="namapg">Nama Pegawai  </label></td>
                <td><input type="text" name = "idp" ></td>    
                </td>
                </tr>
                <tr>
                <td><label for="nopg">Telepon</label></td>
                <td><input type="text" name = "nopg" ></td>
                </td>
                </tr>
                <tr>
                <td><label for="jabpeg">Jabatan  </label></td>
                <td><input type="text" name = "nama" ></td>
                </tr>
                <tr>
                <td><label for="emailpg">Email  </label></td>
                <td><input type="text" name = "email" ></td>
                </tr>
                <tr>
                <td><label for="jkpg">Jenis Kelamin  </label></td>
                <td><input type="text" name = "telp" ></td>
                </tr>
                <tr>
                <td><label for="alamatpg">Alamat  </label></td>
                <td><textarea name="alamat" cols="21" rows="10"></textarea></td>
                </tr>
                <tr>
                <td><label for="ketpeg">Keterangan  </label></td>
                <td><input type="text" name = "ket" ></td>
                </tr>
            </table>
            <input type="submit" value = "Daftar" name = "daftar">
        </fieldset>
    </form>
</body>
</html>