<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    public function add(Request $request){
        $username = $request->input('username');
        $password = bcrypt($request->input('password'));
        $email = $request->input('email');
        $nama_admin = $request->input('nama_admin');

        $admin = new Admin;
        $admin->username = $username;
        $admin->password = $password;
        $admin->email = $email;
        $admin->nama_admin = $nama_admin;
        $admin->save();

        // Setelah admin berhasil ditambahkan, set cookies
        $cookieValue = "Menapak";
        $minutes = 300;

        Cookie::queue('nama_cookies', $cookieValue, $minutes);

        return response()->json([
            'status' => 'sukses',
            'pesan' => 'Data berhasil tersimpan',
        ], 200);
    }
}