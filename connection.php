<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_mahasiswa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";