<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\KategoriArtikel;

class ArticleController extends Controller
{
    public function index() {
        $artikel = Article::paginate(10);
        return $artikel;
    }

    public function showLimit(){
        $artikell = Article::select('*')->take(5)->get();
        return $artikell;
    }

    public function add(Request $request){
        $article_title = $request->input('article_title');
        $article_details = $request->input('article_details');
        $article_status = $request->input('article_status');
        $published_date = $request->input('published_date');
        $id_admin = $request->input('id_admin');
        $id_kategori = $request->input('id_kategori');
        $thumbnail = $request->file('thumbnail');

        $ktgart = KategoriArtikel::where('id_kategori', $id_kategori)->first();
        $thumb = $thumbnail->getClientOriginalName();

        $artikel = new Article;
        $artikel->article_title = $article_title;
        $artikel->article_details = $article_details;
        $artikel->article_status = $article_status;
        $artikel->published_date = $published_date;
        $artikel->id_admin = $id_admin;
        $artikel->thumbnail = $thumb;
        $artikel->save();

        return response()->json([
            'status' => true,
            'pesan' => 'Data telah ditambahkan',
            'data' => $artikel,
        ], 200);
    }
}