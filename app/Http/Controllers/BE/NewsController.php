<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(){
        $news = News::join('kategori_berita', 'kategori_berita.id_kategori', '=', 'news.id_kategori')->get();

        $data = [];

        foreach ($news as $baru) {
            $data[] = [
                'news_title' => $baru->news_title,
                'news_details' => $baru->news_details,
                'slug' => $baru->slug,
                'published_date' => $baru->published_date,
                'dibaca' => $baru->dibaca,
                'updated_at' => $baru->updated_at,
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

        Storage::put('img/news/' . $thumb, file_get_contents($thumbnail));

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
                'dibaca' => $nws->dibaca + 1,
                'news_details' => $nws->news_details,
                'nama_kategori' => $nws->nama_kategori,
            ];
        }

        return $det;
    }

    function editView($id_news){
        $editview = News::join('kategori_berita', 'kategori_berita.id_kategori', '=', 'news.id_kategori')
        ->join('admin', 'admin.id_admin', '=', 'news.id_admin')->where('id_news', $id_news)->get();

        $deta = [];

        foreach($editview as $nwss){
            $deta[] = [
                'judul' => $nwss->news_title,
                'published_date' => $nwss->published_date,
                'dibaca' => $nwss->dibaca,
                'news_details' => $nwss->news_details,
                'nama_kategori' => $nwss->nama_kategori,
            ];
        }

        return $deta;
    }

    function edit(Request $request, $id_news){
        $berita = News::where('id_news', $id_news);

        if($berita){
            $news_title = $request->input('news_title');
            $kecil = strtolower($news_title);
            $slug = str_replace(' ','-', $kecil);
            $news_details = $request->input('news_details');
            $id_kategori = $request->input('id_kategori');
            $id_admin = $request->input('id_admin');
            $published_date = today();
            $thumbnail = $request->file('thumbnail');

            $thumb = $thumbnail->getClientOriginalName();

            $gbr = News::where('thumbnail', $berita->thumbnail)->first();

            if ($gbr) {
                Storage::delete('img/news/' . $berita->thumbnail);
            } else {
                Storage::put('img/news/' . $thumb, file_get_contents($thumbnail));
            }

            $berita->news_title = $news_title;
            $berita->slug = $slug;
            $berita->news_details = $news_details;
            $berita->id_kategori = $id_kategori;
            $berita->id_admin = $id_admin;
            $berita->published_date = $published_date;
            $berita->thumbnail = $thumb;
            $berita->save();

            return $berita;
        }else{
            echo "Tidak ada data";
        }
    }

    function delete($id_news){
        $idnewsdel = News::where('id_news', $id_news)->first();

        if($idnewsdel){
            $idnewsdel->delete();
            return $idnewsdel;
        }else{
            echo "Data tidak ditemukan!";
        }
    }
}
