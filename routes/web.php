<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\programcontroller;
use App\Http\Controllers\kegiatan;
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

Route::get('/tata-kelola-kawasan', [kegiatan::class, 'tatakelola']);
Route::get('/penelitian', [kegiatan::class, 'penelitian']);
Route::get('/pengelolaan-sda', [kegiatan::class, 'pengelolaan']);
Route::get('/peningkatan-kapasitas', [kegiatan::class, 'peningkatan']);
Route::get('/advokasi-kebijakan', [kegiatan::class, 'advokasi']);

Route::get('/program', [programcontroller::class, 'program']);
Route::get('/program/Produk-Komunitas', [programcontroller::class, 'ProdukKomunitas']);
Route::get('/program/Produk-Pengetahuan', [programcontroller::class, 'ProdukPengetahuan']);
Route::get('/program/Wilayah-Kerja', [programcontroller::class, 'WilayahKerja']);



Route::get('/about', function () {
    return view('about');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/about/{page}', function ($page) {
    return view('about',['page' => $page]);
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/publikasi', function () {
    return view('publikasi');
});
Route::get('/artikel', function () {
    return view('artikel');
});

