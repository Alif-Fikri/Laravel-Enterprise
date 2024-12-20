<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
use Carbon\carbon;
use Illuminate\Http\Request;

class contohcontroller extends Controller 
{
    public function tampilcontoh()
    {
       $produkPerHari = Produk::SelectRaw('DATE(created_at) as date, COUNT(*) as total')
        ->groupBy('date')
        ->orderBy('date', 'asc')
        ->get();

    $dates = [];
    $totals = [];

    foreach ($produkPerHari as $item){
        $dates[] = Carbon::parse($item->date)->format('Y-m-d');
        $totals[] = $item->total;
    }
    $chart = LarapexChart::barChart()
    ->setTitle('Produk Ditambahkan Per Hari')
    ->setSubtitle('Data Penambahan Produk Harian')
    ->addData('Jumlah Produk', $totals)
    ->setXAxis($dates);

    $data = [
        'totalProducts' => Produk::count(),
        'salesToday' => 130,
        'totalRevenue' => 'Rp 75,000,000',
        'registeredUsers' => 350,
        'chart' => $chart
    ];
    return view('contoh', $data);
    }
}