<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex font-sans bg-gray-100 min-h-screen">

    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white p-6">
        <h2 class="text-center text-2xl font-semibold mb-8">Dashboard Penjualan</h2>
        <ul>
            <li class="mb-4">
                <a href="{{ url('contoh') }}" class="text-lg hover:text-blue-400">Home</a>
            </li>
            <li class="mb-4">
                <a href="{{ url('produk') }}" class="text-lg hover:text-blue-400">Produk</a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-lg hover:text-blue-400">Penjualan</a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-lg hover:text-blue-400">Laporan</a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-lg hover:text-blue-400">Pengaturan</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-gray-700">Selamat Datang di Dashboard Penjualan!</h1>
        </header>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h3 class="text-xl font-semibold text-gray-700 mb-2">Total Produk</h3>
                <p id="total-products" class="text-2xl font-bold text-green-500">{{ $totalproducts }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h3 class="text-xl font-semibold text-gray-700 mb-2">Penjualan Hari Ini</h3>
                <p id="sales-today" class="text-2xl font-bold text-green-500">{{ $salestoday }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h3 class="text-xl font-semibold text-gray-700 mb-2">Total Pendapatan</h3>
                <p id="total-revenue" class="text-2xl font-bold text-green-500">Rp 50,000,000</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <h3 class="text-xl font-semibold text-gray-700 mb-2">Pengguna Terdaftar</h3>
                <p id="registered-users" class="text-2xl font-bold text-green-500">350</p>
            </div>
        </div>

        <!-- Alert -->
        <div class="bg-blue-100 border border-blue-500 text-blue-700 px-4 py-3 rounded mb-8" role="alert">
            <span class="block sm:inline">A simple primary alert—check it out!</span>
        </div>

        <!-- Sales Chart -->
        <div id="chart" class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Grafik Penjualan Bulanan</h2>
            <canvas id="salesChart"></canvas>
        </div>
    </div>

</body>
</html>
