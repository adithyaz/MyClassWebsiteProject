<?php
require 'function.php';

if (isset($_POST["submit"])) {
    // Cek data berhasil atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script> 
            alert('Data berhasil ditambahkan!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "
        <script> 
            alert('Data gagal ditambahkan!');
            document.location.href = 'admin.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah data Siswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Nama: </label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>