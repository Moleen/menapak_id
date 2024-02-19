<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\BE\NewsController;

class HomeController extends Controller
{
    public function index()
    {
        $berita = new NewsController;
        $data = $berita->limit5Populer();
        return view('home', ['data' => $data]);
    }
}