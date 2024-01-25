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
                'dibaca' => $baru->dibaca,
                // Tambahkan field lain jika diperlukan
            ];
        }

        return $data;
    }

    function add(Request $request){
        $news_title = $request->input('news_title');
        $kecil = strtolower($news_title);
        $slug = str_replace(' ','-', $kecil);
        $news_details = $request->input('news_details');
        $id_kategori = $request->input('id_kategori');
        $id_admin = $request->input('id_admin');
        $published_date = today();
        $thumbnail = $request->file('thumbnail');

        $thumb = $thumbnail->getClientOriginalName();

        Storage::put('photos/' . $thumb, file_get_contents($thumbnail));
        
        $news = new News;
        $news->news_title = $news_title;
        $news->slug = $slug;
        $news->news_details = $news_details;
        $news->id_kategori = $id_kategori;
        $news->id_admin = $id_admin;
        $news->published_date = $published_date;
        $news->thumbnail = $thumb;
        $news->save();

        return $news;
    }

    function detail($slug){
        $newss = News::join('kategori_berita', 'kategori_berita.id_kategori', '=', 'news.id_kategori')
        ->join('admin', 'admin.id_admin', '=', 'news.id_admin')->where('slug', $slug)->get();

        $det = [];

        foreach($newss as $nws){
            $det[] = [
                'judul' => $nws->news_title,
                'published_date' => $nws->published_date,
                'dibaca' => $nws->dibaca,
                'news_details' => $baru->news_details,
                'nama_kategori' => $baru->nama_kategori,
            ]
        }

        return $det;
    }
}