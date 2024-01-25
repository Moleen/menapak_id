<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        
        $data = [];

        foreach ($news as $baru) {
            $data[] = [
                'news_title' => $baru->news_title,
                'news_details' => $baru->news_details,
                'slug' => $baru->slug,
                'published_date' => $baru->published_date,
                // Tambahkan field lain jika diperlukan
            ];
        }

        return $data;
    }
}