<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Panca - Sesi 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="bg-indigo-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Toko Panca</h1>
            <div class="space-x-4">
                <a href="/" class="hover:text-indigo-200 font-semibold">Beranda</a>
                <a href="/products" class="hover:text-indigo-200 font-semibold">Produk</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-8 p-4 min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center p-4 mt-8">
        <p>&copy; 2026 Toko Panca - Tugas Sesi 11 Laravel Blade</p>
    </footer>

</body>
</html>