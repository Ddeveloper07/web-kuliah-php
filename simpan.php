<?php

// require database connection file
require_once "connection.php";

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "
            <script>
            alert('pilih gambar terlebih dahulu');</script>
        ";
        return false;
    }

    // cek gambar atau bukan yang diupload
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
        alert('yang anda upload bukan gambar');</script>
        ";
        return false;
    }

    // cek ukuran file
    if ($ukuranFile > 1000000) {
        echo "
        <script>
            alert('ukuran gambar lebih dari 1MB');</script>
        ";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}


// Get posted data.
if (isset($_POST['tambah_user'])) {

    $name = $_POST['name'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = "insert into tbl_users(username, password, nama) values('$user', '$pass', '$name')";
} elseif (isset($_POST['tambah_mahasiswa'])) {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $query = "insert into tbl_mahasiswa(nim, nama, prodi, gambar) values('$nim', '$nama', '$prodi', '$gambar')";
}

// Insert user data into table
$result = mysqli_query($conn, $query);

// show message when user added
echo "User added successfully. <a href='contoh_view.php'>View Users</a>";
