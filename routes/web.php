<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contohcontroller;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;
use App\Models\Produk;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata-mahasiswa', function () {
    return view('biodata_mahasiswa');
});

Route::get('/deskripsi-pemrograman-enterprise', function () {
    return view('pemprograman_web_enterprise');
});

// Route::get('/contoh', function () {
//     return view('contoh');
// });
Route::get('/contoh',[contohcontroller::class,'tampilcontoh']);

// Route::get('/produk', function () {
//     return view('produk');
// });
Route::get('/produk',[ProdukController::class,'ViewProduk']);
Route::get('/produk/add',[ProdukController::class,'ViewAddProduk']);
Route::post('/produk/add',[ProdukController::class,'CreateProduk']);
Route::delete('produk/delete/{kode_produk}', [ProdukController::class, 'DeleteProduk']);
Route::get('/produk/edit/{kode_produk}',[ProdukController::class, 'ViewEditProduk']);
Route::put('/produk/edit/{kode_produk}',[ProdukController::class, 'UpdateProduk']);
Route::get('/laporan', [ProdukController::class, 'ViewLaporan']);
Route::get('/report',[ProdukController::class, 'print']);
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
