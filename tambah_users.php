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
    <a href="data.php">Lihat Data</a>
    <br><br>

    <form action="simpan.php" method="post">
        <table width="25%" border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah" name="tambah_user"></td>
            </tr>
        </table>
    </form>
</body>

</html>