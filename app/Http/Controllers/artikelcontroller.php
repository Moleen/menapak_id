<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BE\ArticleController;

class artikelcontroller extends Controller
{
    public function index()
{
    $artikelBE = new ArticleController;
    $data = $artikelBE->index();

    return view('artikel', ['data' => $data]);
}
}