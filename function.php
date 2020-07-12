<?php
// koneksi database
$konek = mysqli_connect("localhost", "root", "", "Registrasi");
mysqli_query($konek, "SET SESSION sql_mode = ''");
function query($query)
{
    global $konek;
    $result = mysqli_query($konek, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id)
{
    global $konek;
    mysqli_query($konek, "DELETE FROM user WHERE id = $id");
    return mysqli_affected_rows($konek);
}

function registrasi($data)
{
    global $konek;

    $username = htmlspecialchars(strtolower(stripslashes($data["username"])));
    $password = htmlspecialchars(mysqli_real_escape_string($konek, $data["password"]));
    $password2 = htmlspecialchars(mysqli_real_escape_string($konek, $data["password2"]));

    // cek username sudah ada atau belum
    $result = mysqli_query($konek, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar!')
                </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
                </script>";
        return false;
    }

    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // Tambahkan user baru ke database
    mysqli_query($konek, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($konek);
}

function ubah($data)
{
    global $konek;
    $id = $data["id"];
    $nama = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "UPDATE user SET username = '$nama', password = '$password' WHERE id = $id";
    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
}
