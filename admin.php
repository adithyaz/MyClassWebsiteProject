<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: admin-login.php");
    exit;
}
require 'function.php';
$user = query("SELECT * FROM user");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">

    <title>Admin</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Daftar Client</h1>
        <hr>
        <br><br>
        <div class="container">
            <table class="mx-auto table col-md-2">
                <thead class="thead-dark text-center">
                    <tr>
                        <a href="adminislogout.php" class="btn btn-danger">Log Out</a>
                        <th scope="col">No.</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($user as $row) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td>
                                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                                <a href=" hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
                            </td>
                            <td><?= $row["username"]; ?></td>
                            <td><?= $row["password"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
</body>

</html>