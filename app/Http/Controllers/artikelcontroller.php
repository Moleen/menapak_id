<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikelcontroller extends Controller
{
    public function index()
{
    // Mengambil data dari model (gunakan model Anda)
    $data = YourModel::paginate(10); // Menampilkan 10 data per halaman

    return view('artikel', ['data' => $data]);
}
}
