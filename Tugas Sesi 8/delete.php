<?php
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