<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - Toko Panca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f4f4; }
        .register-container { max-width: 400px; margin-top: 60px; }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="card p-4 shadow register-container w-100">
        <h3 class="text-center fw-bold mb-3">Register Akun</h3>
        
        <form action="proses_register.php" method="POST">
            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" class="form-control" placeholder="panca@example.com" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            
            <button type="submit" class="btn btn-primary w-100 mb-3">Daftar Sekarang</button>
            
            <div class="text-center small">
                Sudah punya akun? <a href="login.php">Login di sini</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>