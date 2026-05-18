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
    $nama      = $_POST['nama_produk'];
    $harga     = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $kategori  = $_POST['kategori'];

    // FOTO 
    $nama_foto = $_FILES['foto']['name'];
    $tmp_foto  = $_FILES['foto']['tmp_name'];
    $folder    = "img/" . $nama_foto;
    

    // 3. VALIDASI
    
    if (empty($nama) || empty($harga) || empty($deskripsi) || empty($kategori) || empty($nama_foto)) {
        die("<h2 style='color: red;'>❌ Semua kolom dan foto harus diisi!</h2>");
    } 
    
    elseif (strlen($nama) < 3) {
        die("<h2 style='color: red;'>❌ Nama produk minimal 3 huruf</h2>");
    } 
    
    elseif ($harga < 10000) {
        die("<h2 style='color: red;'>❌ Harga minimal Rp 10.000!</h2>");
    } 
    
    elseif (str_word_count($deskripsi) < 2) {
        die("<h2 style='color: red;'>❌ Deskripsi minimal 2 kata</h2>");
    } 
    
    else {
        if (move_uploaded_file($tmp_foto, $folder)) {
            
            $sql = "INSERT INTO products (nama_produk, kategori, harga, deskripsi, foto, stok) 
                    VALUES ('$nama', '$kategori', '$harga', '$deskripsi', '$nama_foto', 10)";
            
            if (mysqli_query($conn, $sql)) {
                header("Location: index.php");
                exit();
            } else {
                die("<h2 style='color: red;'>❌ Error Database: </h2>" . mysqli_error($conn));
            }

        } else {
            die("<h2 style='color: red;'>❌ Gagal upload foto! Cek apakah folder 'img' sudah ada blay.</h2>");
        }
    }
}
?>