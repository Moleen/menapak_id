<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BE\NewsController;

class BeritaController extends Controller
{
    public function index(){
        $berita = new NewsController;
        $data = $berita->index();
        $judul = "Berita - Menapak Indonesia";
        return view('berita', compact('data','judul'));
    }
}