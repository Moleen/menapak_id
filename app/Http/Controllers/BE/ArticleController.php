<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;

class ArticleController extends Controller
{
    public function index() {
        $artikel = Article::paginate(10);

        // $data = [];

        // foreach($artikel as $artic){
        //     $data[] = [
        //         'id_artikel' => $artic->article_id,
        //         'judul_artikel' => $artic->article_title,
        //         'tanggal_rilis'=> $artic->published_date,
        //     ];
        // }
        return $artikel;
    }

    public function showLimit(){
        $artikell = Article::select('*')->take(5)->get();
        return $artikell;
    }
}