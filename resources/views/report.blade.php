<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Tanggal -->
    <div class="text-right p-4 text-gray-700 text-sm">
        Tanggal: {{ now()->format('d-m-Y H:i') }} <!-- Menampilkan tanggal dan waktu -->
    </div>

    <!-- Heading -->
    <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">
        Laporan Produk
    </h2>

    <!-- Table -->
    <div class="overflow-x-auto px-4">
        <table class="w-full border border-gray-300 bg-white shadow-md rounded-lg">
            <!-- Header -->
            <thead class="bg-gray-100 border-b-2 border-gray-300">
                <tr>
                    <th class="px-4 py-3 text-left font-semibold text-gray-700 uppercase">No</th>
                    <th class="px-4 py-3 text-left font-semibold text-gray-700 uppercase">Nama Produk</th>
                    <th class="px-4 py-3 text-left font-semibold text-gray-700 uppercase">Deskripsi</th>
                    <th class="px-4 py-3 text-left font-semibold text-gray-700 uppercase">Harga</th>
                    <th class="px-4 py-3 text-left font-semibold text-gray-700 uppercase">Jumlah Produk</th>
                </tr>
            </thead>
            <!-- Body -->
            <tbody>
                @foreach($products as $key => $product)
                <tr class="{{ $key % 2 === 0 ? 'bg-gray-50' : 'bg-white' }}">
                    <td class="px-4 py-2 border-t text-gray-600">{{ $key + 1 }}</td>
                    <td class="px-4 py-2 border-t text-gray-600">{{ $product->nama_produk }}</td>
                    <td class="px-4 py-2 border-t text-gray-600">{{ $product->deskripsi }}</td>
                    <td class="px-4 py-2 border-t text-gray-600">Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
                    <td class="px-4 py-2 border-t text-gray-600">{{ $product->jumlah_produk }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
