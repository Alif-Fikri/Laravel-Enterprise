<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100 min-h-screen flex flex-col">

    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white p-6 fixed h-full">
        <h2 class="text-center text-2xl font-semibold mb-8">Dashboard Penjualan</h2>
        <ul>
            <li class="mb-4">
                <a href="{{ url('home') }}" class="text-lg hover:text-blue-400">Home</a>
            </li>
            <li class="mb-4">
                <a href="{{ url('product') }}" class="text-lg hover:text-blue-400">Produk</a>
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
    <div class="flex-1 p-8 ml-64">
        <header class="mb-8 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-700">Daftar Produk</h1>
                <p class="text-1xl font-sans text-gray-700">Temukan produk terbaik pilihan anda!</p>
            </div>
            <a href="{{ url('product/add/') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-colors duration-200">
                Add Product
            </a>
        </header>
<!-- Product Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($product as $item)
    <div class="bg-white p-4 rounded-lg shadow-md transform hover:scale-105 transition-transform duration-200 w-70" style="height: 400px;">
        <img src="https://via.placeholder.com/200" alt="{{ $item->nama_produk }}" class="w-full h-48 object-cover mb-4">
        <h3 class="text-xl font-semibold mb-2">{{ $item->nama_produk }}</h3>
        <p class="text-green-500 font-bold mb-2">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
        <p class="text-sm text-gray-600 mb-4">{{ $item->deskripsi }}</p>
        <div class="flex space-x-2 justify-center">
            <!-- Edit Button -->
            <a href="{{ url('product/edit/' . $item->kode_produk) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition-colors duration-200">
                +
            </a>
            
            <form action="{{ url('product/delete/' . $item->kode_produk) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                @csrf
                @method('DELETE')
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition-colors duration-200">-</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
    
    <p class="absolute left-1/2 transform -translate-x-1/2 translate-x-5 bottom-10 text-gray-500 text-sm">
        &copy; 2024 Aplikasi Penjualan. All rights reserved.
    </p>
</body>
</html>
