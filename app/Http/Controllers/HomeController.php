<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\NewsController;

class HomeController extends Controller
{
    public function index()
    {
        $berita = new NewsController;
        $data = $berita->index();
        return view('home', ['data' => $data]);
    }
}