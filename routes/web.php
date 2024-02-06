<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\programcontroller;
use App\Http\Controllers\BeritaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

// Route::get('/program', [programcontroller::class, 'program']);
// Route::get('/program/penelitian', [programcontroller::class, 'penelitian']);
// Route::get('/program/pengelolaan-sda', [programcontroller::class, 'pengelolaan']);
// Route::get('/program/peningkatan-kapasitas', [programcontroller::class, 'peningkatan']);
// Route::get('/program/advokasi-kebijakan', [programcontroller::class, 'advokasi']);

Route::get('/program', [programcontroller::class, 'program']);
Route::get('/program/Produk-Komunitas', [programcontroller::class, 'ProdukKomunitas']);
Route::get('/program/Produk-Pengetahuan', [programcontroller::class, 'ProdukPengetahuan']);
Route::get('/program/Wilayah-Kerja', [programcontroller::class, 'WilayahKerja']);

Route::get('/about', function () {
    return view('program');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/berita', [BeritaController::class, 'index']);