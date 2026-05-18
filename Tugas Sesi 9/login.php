<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Toko Panca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f4f4; }
        .login-container { max-width: 400px; margin-top: 100px; }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="card p-4 shadow login-container w-100">
        <h3 class="text-center fw-bold mb-3">Login Toko</h3>
        
        <?php if (isset($_GET['pesan'])): ?>
            <div class="alert alert-danger text-center small py-2" role="alert">
                <?php 
                    if ($_GET['pesan'] == "password_salah") {
                        echo "Password lo salah blay, teliti lagi!";
                    } else if ($_GET['pesan'] == "tidak_terdaftar") {
                        echo "Username gak terdaftar! Register dulu sana.";
                    }
                ?>
            </div>
        <?php endif; ?>
        
        <form action="proses_login.php" method="POST">
            <div class="mb-3">
                <label class="form-label fw-semibold">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username lo" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password lo" required>
            </div>
            
            <button type="submit" class="btn btn-dark w-100 mb-3">Masuk Jam Sekarang</button>
            
            <div class="text-center small">
                Belum punya akun? <a href="register.php">Daftar disini</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>