<?php
// 1. KONEKSI
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ecommerce_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// 2. TANGKAP DATA
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    // 3. VALIDASI (Custom Error)
    
    // Cek Kosong
    if (empty($nama) || empty($harga) || empty($deskripsi)) {
        die("<h2 style='color: red;'>❌ Semua kolom harus diisi</h2>");
    } 
    
    // Minimal 3 Huruf Nama Barang
    elseif (strlen($nama) < 3) {
        die("<h2 style='color: red;'>❌ Nama produk minimal 3 huruf</h2>");
    } 
    
    // Minimal Harga 10.000
    elseif ($harga < 10000) {
        die("<h2 style='color: red;'>❌ Harga minimal Rp 10.000!</h2>");
    } 
    
    // Minimal 2 Kata Deskripsi
    elseif (str_word_count($deskripsi) < 2) {
        die("<h2 style='color: red;'>❌ Deskripsi minimal 2 kata</h2>");
    } 
    
    // JIKA SEMUA LOLOS
    else {
        $sql = "INSERT INTO products (nama_produk, harga, deskripsi, stok) 
                VALUES ('$nama', '$harga', '$deskripsi', 10)";
        
        if (mysqli_query($conn, $sql)) {
            echo "<h2 style='color: green;'>✅ Mantap! Data lolos seleksi dan masuk database.</h2>";
            echo "<a href='tambah_produk.php'>Input Barang Lagi</a>";
        } else {
            die("<h2 style='color: red;'>❌ Waduh Error: </h2>" . mysqli_error($conn));
        }
    }
}
?>