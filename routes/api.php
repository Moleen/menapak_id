<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BE\NewsController;
use App\Http\Controllers\Api\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//BERITA
Route::get('/news', [NewsController::class, 'index']);
Route::post('/news/add', [NewsController::class, 'add']);
Route::get('/news/{slug}', [NewsController::class, 'detail']);
Route::post('/news/edit/{id_news}', [NewsController::class, 'edit']);
Route::delete('/news/del/{id_news}', [NewsController::class, 'delete']);

Route::post('/admin/add', [AdminController::class, 'add']);