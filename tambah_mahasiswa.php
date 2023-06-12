<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PHP</title>
</head>

<body>
    <h1>Form Input Data User</h1>
    <a href="contoh_view.php">Lihat Data</a>
    <br><br>

    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <table width="25%" border="0">
            <tr>
                <td>Nim</td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                    <select name="prodi" id="prodi">
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                    </select>
                </td>
            </tr>
            <!-- Tambah upload gambar -->
            <tr>
                <td>Upload gambar</td>
                <td><input type="file" name="gambar" id="gambar"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah" name="tambah_mahasiswa"></td>
            </tr>
        </table>
    </form>
</body>

</html>