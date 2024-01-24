<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        if($news->count() > 0){
            return response()->json([
                'status' => true,
                'data' => $news
            ], 200);
        }else {
            return response()->json([
                'status' => false,
                'pesan' => 'Berita tidak ditemukan',
            ], 404);
        }
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

        return response()->json([
            'status' => true,
            'pesan' => 'Data telah disimpan',
            'data' => $news
        ],200);
    }

    function detail($slug){
        $newss = News::where('slug', $slug);

        if($newss->count() > 0){
            $berita = $newss->get();
            return response()->json([
                'status' => true,
                'data' => $berita
            ],200);
        }else{
            return response()->json([
                'status' => true,
                'pesan' => 'Berita tidak ditemukan'
            ],404);
        }
    }

    function edit(Request $request, $id_news) {
    $editnews = News::where('id_news', $id_news)->first();

        if ($editnews) {
            $news_title = $request->input('news_title');
            $kecil = strtolower($news_title);
            $slug = str_replace(' ', '-', $kecil);
            $news_details = $request->input('news_details');
            $id_kategori = $request->input('id_kategori');
            $id_admin = $request->input('id_admin');
            $published_date = today();
            $thumbnail = $request->file('thumbnail');

            $thumb = $thumbnail->getClientOriginalName();

            $gbr = News::where('thumbnail', $editnews->thumbnail)->first();

            if ($gbr) {
                Storage::delete('photos/' . $editnews->thumbnail);
            } else {
                Storage::put('photos/' . $thumb, file_get_contents($thumbnail));
            }

            $editnews->news_title = $news_title;
            $editnews->slug = $slug;
            $editnews->news_details = $news_details;
            $editnews->id_kategori = $id_kategori;
            $editnews->id_admin = $id_admin;
            $editnews->published_date = $published_date;
            $editnews->thumbnail = $thumb;
            $editnews->save();

            return response()->json([
                'status' => true,
                'data' => $editnews,
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'pesan' => 'Data tidak ditemukan'
            ], 404);
        }
    }

    function delete($id_news){
        $idnewsdel = News::where('id_news', $id_news)->first();

        if($idnewsdel){
            $idnewsdel->delete();
            
            return response()->json([
                'status'=>true,
                'pesan' => 'Berita sudah terhapus.'
            ],200);
        }else{
            return response()->json([
                'status'=>false,
                'pesan' => 'berita gagal dihapus.'
            ]);
        }
    }

}