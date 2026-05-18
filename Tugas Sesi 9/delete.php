<?php
session_start();
// Cek apakah sudah login DAN apakah dia admin
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    echo "<script>
             alert('Akses ditolak!');
             window.location.href='index.php';
          </script>";
    exit();
}
?>

include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM products WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    // Kalau sukses, langsung balik ke halaman index.php
    header("Location: index.php?pesan=berhasil_hapus");
} else {
    echo "Gagal menghapus: " . mysqli_error($conn);
}
?>