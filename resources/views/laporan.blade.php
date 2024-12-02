<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white p-6 fixed h-full">
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
                <a href="{{ url('laporan') }}" class="text-lg hover:text-blue-400">Laporan</a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-lg hover:text-blue-400">Pengaturan</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content ml-64 p-6">
        <header>
            <h1 class="text-2xl font-bold mb-4">Selamat Datang di Dashboard Penjualan!</h1>
        </header>
        <div class="container mt-4">
            <h2 class="text-center text-xl font-semibold mb-6">Laporan Produk</h2>
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">No</th>
                            <th class="border border-gray-300 px-4 py-2">Nama Produk</th>
                            <th class="border border-gray-300 px-4 py-2">Deskripsi</th>
                            <th class="border border-gray-300 px-4 py-2">Harga</th>
                            <th class="border border-gray-300 px-4 py-2">Jumlah Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $key => $product)
                        <tr class="{{ $key % 2 === 0 ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $key + 1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->nama_produk }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $product->deskripsi }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-right">{{ number_format($product->harga, 0, ',', '.') }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $product->jumlah_produk }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                <a href="{{ url('report') }}" class="bg-gray-800 hover:bg-gray-900 text-white py-2 px-4 rounded block text-center">Export to PDF</a>
            </div>
        </div>
    </div>
</body>
</html>
