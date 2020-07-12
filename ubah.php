<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: admin-login.php");
    exit;
}
require 'function.php';

// Ambil data di URL
$id = $_GET["id"];
// Query data client berdasarkan id
$client = query("SELECT * FROM user WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    // Cek data berhasil atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script> 
            alert('Data berhasil diubah!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "
        <script> 
            alert('Data gagal diubah!');
            document.location.href = 'admin.php';
        </script>
        ";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- MyCSS -->
    <link rel="stylesheet" href="ubah.css">

    <title>Ubah Data</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <form action="" method="post" class="card-body">
                <h1 class="text-center mt-4">Ubah data client</h1>
                <hr>
                <input type="hidden" name="id" value="<?= $client["id"]; ?>">
                <ul>
                    <li>
                        <label for="username">Nama</label><br>
                        <input type="text" name="username" class="form-control" id="username" required value="<?= $client["username"]; ?>">
                    </li>
                    <li>
                        <label for="password">Password</label><br>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password baru" required>
                    </li>
                    <li>
                        <button type="submit" class="btn btn-success mt-3" name="submit">Ubah Data</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>