<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100 min-h-screen flex flex-col">

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
                <a href="{{url('laporan')}}" class="text-lg hover:text-blue-400">Laporan</a>
            </li>
            <li class="mb-4">
                <a href="#" class="text-lg hover:text-blue-400">Pengaturan</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-8 ml-64">
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-gray-700">Edit Produk</h1>
            <p class="text-1xl font-sans text-gray-700">Ubah detail produk di bawah ini.</p>
        </header>

        <!-- Edit Produk Form -->
        <form action="{{ url('produk/edit/' . $ubahproduk->kode_produk) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="nama_produk" class="block text-gray-700 font-semibold">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control w-full mt-2 p-2 border rounded" required value="{{ $ubahproduk->nama_produk }}">
            </div>
            
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700 font-semibold">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control w-full mt-2 p-2 border rounded" required value="{{ $ubahproduk->deskripsi }}">
            </div>
            
            <div class="mb-4">
                <label for="harga" class="block text-gray-700 font-semibold">Harga</label>
                <input type="number" name="harga" class="form-control w-full mt-2 p-2 border rounded" required value="{{ $ubahproduk->harga }}">
            </div>
            
            <div class="mb-4">
                <label for="jumlah_produk" class="block text-gray-700 font-semibold">Jumlah Produk</label>
                <input type="text" name="jumlah_produk" class="form-control w-full mt-2 p-2 border rounded" required value="{{ $ubahproduk->jumlah_produk }}">
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold">Gambar</label>
                <div class="relative">
                    <input type="file" name="image" id="image" class="form-control w-full mt-2 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" />
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-colors duration-200">
                    Update Produk
                </button>
            </div>
        </form>
    </div>

</body>
</html>
