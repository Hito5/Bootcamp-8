<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "root";
$pass = "";
$db   = "ecommerce_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama     = $_POST['nama'];
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    // Hash password biar aman
    $password_aman = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (nama, email, password, username) VALUES ('$nama', '$email', '$password_aman', '$username')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Akun berhasil dibuat! Silakan login.');
                window.location.href='login.php';
              </script>";
        exit();
    } else {
        die("Gagal Simpan: " . mysqli_error($conn));
    }
}
?>