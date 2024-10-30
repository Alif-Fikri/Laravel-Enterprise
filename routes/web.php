<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contohcontroller;
use App\Http\Controllers\ProductController;

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

// Route::get('/product', function () {
//     return view('product');
// });
Route::get('/product',[ProductController::class,'ViewProduct']);