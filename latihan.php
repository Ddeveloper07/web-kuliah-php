<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <h1>Latihan Dasar PHP</h1>

    <?php
    // Cetak
    echo "hello world <br>";
    // Variabel
    $nama = "ucup";
    $lahir = 2000;
    $umur = 2023 - $lahir;
    // echo "nama saya " . $nama . ". saya lahir tahun " . $lahir . ", jadi usia saya adalah " . $umur . " tahun";
    ?>

    Nama saya <?= $nama; ?>. 
    Saya lahir tahun <?= $lahir; ?>, 
    jadi usia saya adalah <?= $umur; ?>. 
</body>
</html>