<?php
// Session
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login1.php");
    exit;
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
    <link rel="stylesheet" href="galeri.css">

    <!-- MyFont -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&family=Staatliches&display=swap" rel="stylesheet">

    <title>Gallery of TAV-1</title>

    <link rel="shortcut icon" href="img/icon.png">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning navigasi fixed-top">
        <a class="navbar-brand" href="index.php">Teknik Audio Video 1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="download.php">Software</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="location.php">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buku.php">Books</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Social Media
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://instagram.com/electronical.one">Instagram</a>
                        <a class="dropdown-item" href="mailto:electronical.one@gmail.com">Email</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-warning" href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    </div>
    <!-- Akhir Navbar -->

    <!-- Gambar -->
    <div class="text-center">
        <div class="container gambar">
            <h1>Gallery</h1>
            <hr>
            <a href="img/1.jpg">
                <img src="img/1.jpg" class="img-thumbnail"></a>
            <a href="img/2.jpg">
                <img src="img/2.jpg" class="img-thumbnail"></a>
            <a href="img/3.jpg">
                <img src="img/3.jpg" class="img-thumbnail"></a>
            <a href="img/zap.jpg">
                <img src="img/zap.jpg" class="img-thumbnail"></a>
            <a href="img/solder.jpg">
                <img src="img/solder.jpg" class="img-thumbnail"></a>
            <a href="img/4.jpg">
                <img src="img/4.jpg" class="img-thumbnail"></a>
            <a href="img/5.jpg">
                <img src="img/5.jpg" class="img-thumbnail"></a>
            <a href="img/6.jpg">
                <img src="img/6.jpg" class="img-thumbnail"></a>
            <a href="img/7.jpg">
                <img src="img/7.jpg" class="img-thumbnail"></a>
            <a href="img/8.jpg">
                <img src="img/8.jpg" class="img-thumbnail"></a>
            <a href="img/9.jpg">
                <img src="img/9.jpg" class="img-thumbnail"></a>
            <a href="img/10.jpg">
                <img src="img/10.jpg" class="img-thumbnail"></a>
            <a href="img/11.jpg">
                <img src="img/11.jpg" class="img-thumbnail"></a>
            <a href="img/12.jpg">
                <img src="img/12.jpg" class="img-thumbnail"></a>
        </div>
        <!-- Akhir Gambar -->

        <!-- Footer -->
        <footer class="bg-warning">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <p>Copyright &copy; 2020 TAV-1 | Builted by <a href="https://instagram.com/mohamadadithya">Anon?</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Akhir Footer -->

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