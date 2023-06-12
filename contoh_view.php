<?php
// Panggil Koneksi
require_once "connection.php";

// querry memanggil data
$query = "SELECT * FROM tbl_mahasiswa";

// jalankan querry
$data = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah_mahasiswa.php">
        Tambah Mahasiswa
    </a>
    <br><br>
    <table border="1" width="65%">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Action</th>
        </tr>
        <?php
        while ($hasil = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?= $hasil['nim']; ?></td>
                <td><?= $hasil['nama']; ?></td>
                <td><?= $hasil['prodi']; ?></td>
                <td>
                    <a href="hapus.php?id=">Hapus</a> | <a href="edit.php?id=">Edit</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>