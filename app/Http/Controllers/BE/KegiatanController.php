<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\File;

class KegiatanController extends Controller
{
    function index(){
        $kegiatan = Kegiatan::all();

        $data = [];

        foreach($kegiatan as $act){
            $data[] = [
                'nama_kegiatan' => $act->nama_kegiatan,
                'deskripsi_kegiatan' => $act->deskripsi_kegiatan,
                'jenis_kegiatan' => $act->jenis_kegiatan,
                'durasi' => $act->durasi,
                'tgl_mulai' => $act->tgl_mulai,
                'tgl_selesai' => $act->tgl_selesai,
                'status_kegiatan' => $act->status_kegiatan,
                'foto_kegiatan' => $act->foto_kegiatan,
            ];
        }

        return $data;
    }

    function add(Request $request){
        $nama_kegiatan = $request->input('nama_kegiatan');
        $deskripsi_kegiatan = $request->input('deskripsi_kegiatan');
        $jenis_kegiatan = $request->input('jenis_kegiatan');
        $durasi = $request->input('durasi');
        $tgl_mulai = $request->input('tgl_mulai');
        $tgl_selesai = $request->input('tgl_selesai');
        $status_kegiatan = $request->input('status_kegiatan');
        $foto_kegiatan = $request->file('foto_kegiatan');

        $thumb = $foto_kegiatan->getClientOriginalName();
        $jkegiatan = str_replace(" ","_", $jenis_kegiatan);

         $path = public_path() . '/img/event/' . $jkegiatan;
        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
            File::put($path . '/' . $thumb, file_get_contents($foto_kegiatan));
        }else{
            File::put($path . '/' . $thumb, file_get_contents($foto_kegiatan));
        }


        $kegiatan = new Kegiatan;
        $kegiatan->nama_kegiatan = $nama_kegiatan;
        $kegiatan->deskripsi_kegiatan = $deskripsi_kegiatan;
        $kegiatan->jenis_kegiatan = $jenis_kegiatan;
        $kegiatan->durasi = $durasi;
        $kegiatan->tgl_mulai = $tgl_mulai;
        $kegiatan->tgl_selesai = $tgl_selesai;
        $kegiatan->status_kegiatan = $status_kegiatan;
        $kegiatan->foto_kegiatan = $thumb;
        $kegiatan->save();

        return $kegiatan;
    }

    function detail($id_kegiatan){
        $idkeg = Kegiatan::where('id_kegiatan', $id_kegiatan)->first();

        if($idkeg){
            $data = [];

            foreach($idkeg as $keg){
                $data[] = [
                    'nama_kegiatan' => $keg->nama_kegiatan,
                    'deskripsi_kegiatan' => $keg->deskripsi_kegiatan,
                    'jenis_kegiatan' => $keg->jenis_kegiatan,
                    'durasi' => $keg->durasi,
                    'tgl_mulai' => $keg->tgl_mulai,
                    'tgl_selesai' => $keg->tgl_selesai,
                    'status_kegiatan' => $keg->status_kegiatan,
                    'foto_kegiatan' => $keg->foto_kegiatan,
                ];
            }
        }

        return $idkeg;
    }

    function edit(Request $request, $id_kegiatan){
        $idkegiatan = Kegiatan::where('id_kegiatan', $id_kegiatan)->first();

        if($idkegiatan){
            $idkegiatan->nama_kegiatan = $request->input('nama_kegiatan');
            $idkegiatan->deskripsi_kegiatan = $request->input('deskripsi_kegiatan');
            $idkegiatan->jenis_kegiatan = $request->input('jenis_kegiatan');
            $idkegiatan->durasi = $request->input('durasi');
            $idkegiatan->tgl_mulai = $request->input('tgl_mulai');
            $idkegiatan->tgl_selesai = $request->input('tgl_selesai');
            $idkegiatan->status_kegiatan = $request->input('status_kegiatan');
            $fotokegiatan = $request->file('foto_kegiatan');

            $thumb = $fotokegiatan->getClientOriginalName();
            $jkegiatan = str_replace(" ", "_", $idkegiatan->jenis_kegiatan);
            $path = public_path() . 'img/event/' . $jkegiatan;
            File::put($path . '/' . $thumb, file_get_contents($fotokegiatan));
            File::delete($path . '/' . $idkegiatan->foto_kegiatan);

            $idkegiatan->foto_kegiatan = $thumb;
            $idkegiatan->save();
        }

        return $idkegiatan;
    }

    function delete($id_kegiatan){
        $idkeg = Kegiatan::where('id_kegiatan', $id_kegiatan)->first();

        if($idkeg){
            $idkeg->delete();
        }else{
            $idkeg = "Data tidak terhapus";
        }

        return $idkeg;
    }
}