<?php
session_start();
// Cek apakah sudah login DAN apakah dia admin
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    echo "<script>
             alert('Halaman ini cuma buat Admin!');
             window.location.href='index.php';
          </script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sesi 7 - Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #efe6d8; padding-top: 50px;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm border-0" style="border-radius: 20px;">
                <div class="card-body p-4">
                    <h3 class="fw-bold mb-4 text-center">Tambah Produk Baru</h3>
                    
                    <form action="proses.php" method="POST" enctype="multipart/form-data">
    
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" placeholder="Contoh: Keyboard Mechanical">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Harga (Rp)</label>
                            <input type="number" name="harga" class="form-control" placeholder="850000">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" rows="3" placeholder="Jelaskan detail barangnya..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Kategori Produk</label>
                            <select name="kategori" class="form-select" required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                            <option value="Elektronik">Elektronik</option>
                            <option value="Aksesoris">Aksesoris</option> 
                        </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Foto Produk</label>
                            <input type="file" name="foto" class="form-control" accept="image/*" required>
                            <div class="form-text">Pilih foto produk terbaikmu blay.</div>
                        </div>
                        
                        <button type="submit" class="btn btn-dark w-100 mb-2">Simpan Produk</button>

                        <a href="index.php" class="btn btn-outline-secondary w-100">Batal & Lihat Daftar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>