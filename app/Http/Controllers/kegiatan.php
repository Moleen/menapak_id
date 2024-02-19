<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kegiatan extends Controller
{
     public function tatakelola(){
      $tatakelola = [
        'title' => 'Tata Kelola Kawasan',
        'image' => 'img/3.jpg',
        'content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>'
      ];
      return view('kegiatan.tatakelola', ['tatakelola' => $tatakelola]);
    }
     public function penelitian(){
      $penelitian = [
        'title' => 'Penelitian',
        'image' => 'img/3.jpg',
        'content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>'
      ];
      return view('kegiatan.penelitian', ['penelitian' => $penelitian]);
    }
    public function pengelolaan(){
      $pengelolaan = [
        'title' => 'Pengelolaan SDA',
        'image' => 'img/2.jpg',
        'content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>'
      ];
      return view('kegiatan.pengelolaan', ['pengelolaan' => $pengelolaan]);
    }
    public function peningkatan(){
      $peningkatan = [
        'title' => 'Peningkatan SDA',
        'image' => 'img/2.jpg',
        'content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>'
      ];
      return view('kegiatan.peningkatan', ['peningkatan' => $peningkatan]);
    }
    public function advokasi(){
      $advokasi = [
        'title' => 'advokasi SDA',
        'image' => 'img/2.jpg',
        'content' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>'
      ];
      return view('kegiatan.advokasi', ['advokasi' => $advokasi]);
    }
}
