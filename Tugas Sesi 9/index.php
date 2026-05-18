<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

// 1. KONEKSI
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Toko Panca - Sesi 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f4f4; }
        .card-img-top { height: 200px; object-fit: cover; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Katalog Produk</h1>
        
        <div class="d-flex align-items-center gap-3">
            <span class="text-muted">Halo, <strong><?php echo $_SESSION['nama']; ?></strong></span>
            
            <?php if ($_SESSION['role'] === 'admin') : ?>
                <a href="tambah_produk.php" class="btn btn-dark">Tambah Barang</a>
            <?php endif; ?>
            
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <div class="card p-3 mb-4 shadow-sm">
        <form method="GET" action="" class="row g-2">
            <div class="col-md-4">
                <select name="cat" class="form-select">
                    <option value=""> Semua Kategori </option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Aksesoris">Aksesoris</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </form>
    </div>

    <div class="row">
        <?php
        $filter = isset($_GET['cat']) ? $_GET['cat'] : '';

        // Query SQL 
        if ($filter != "") {
            $query = mysqli_query($conn, "SELECT * FROM products WHERE kategori = '$filter'");
        } else {
            $query = mysqli_query($conn, "SELECT * FROM products");
        }

        while ($data = mysqli_fetch_assoc($query)) :
        ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="img/<?= $data['foto'] ?>" class="card-img-top" alt="Foto Produk">
                    
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2"><?= $data['kategori'] ?></span>
                        <h5 class="card-title fw-bold"><?= $data['nama_produk'] ?></h5>
                        <p class="card-text text-muted"><?= $data['deskripsi'] ?></p>
                        <h4 class="text-primary fw-bold">Rp <?= number_format($data['harga'], 0, ',', '.') ?></h4>
                    </div>

                    <div class="card-footer bg-white border-top-0 d-flex gap-2">
                        <a href="#" class="btn btn-success flex-fill">Beli</a>
                        
                        <?php if ($_SESSION['role'] === 'admin') : ?>
                            <a href="delete.php?id=<?= $data['id'] ?>" 
                               class="btn btn-outline-danger" 
                               onclick="return confirm('Hapus barang ini?')">Hapus</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

</body>
</html>