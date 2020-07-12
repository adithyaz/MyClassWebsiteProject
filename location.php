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
    <link rel="stylesheet" href="lokasi.css">

    <!-- MyFont -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital@1&family=Staatliches&display=swap" rel="stylesheet">

    <title>Location of TAV-1</title>

    <link rel="shortcut icon" href="img/icon.png">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary navigasi fixed-top">
        <a class="navbar-brand" href="index.php">Teknik Audio Video 1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="download.php">Software</a>
                </li>
                <li class="nav-item active">
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
                    <a class="nav-link btn btn-secondary" href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>
    </nav>
    </div>
    <!-- Akhir Navbar -->

    <!-- Body -->
    <div class="container">
        <h1 class="text-center">Location</h1>
        <hr>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="map-responsive">
                <iframe class="text-center border border-dark rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.987893627424!2d106.72346494977253!3d-6.132328261808269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5e6cb73b007%3A0x64c793c6f6166448!2sSMK%20Negeri%2053!5e0!3m2!1sid!2sid!4v1592928069144!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="card text-left sekolah">
                <div class="card-header">
                    Address
                </div>
                <div class="card-body">
                    <strong>SMKN 53 Jakarta</strong>
                    <p class="card-text alamat">Jl. Flamboyan No.53, RT.14/RW.10, Cengkareng Barat</p>
                    <p class="card-text kota"> Daerah Khusus Ibukota Jakarta 11730</p>
                    <p class="card-text telp">(021) 29511482</p>
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Body -->

    <!-- Footer -->
    <footer class="bg-secondary">
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