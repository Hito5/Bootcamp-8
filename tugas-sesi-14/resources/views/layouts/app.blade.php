<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Panca - Sesi 14</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <x-navbar />

    <main class="container mx-auto mt-8 p-4 flex-grow">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>