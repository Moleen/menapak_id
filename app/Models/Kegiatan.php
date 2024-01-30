<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $primaryKey = 'id_kegiatan';
    protected $fillable = ['nama_kegiatan','deskripsi_kegiatan','jenis_kegiatan','durasi','tgl_mulai','tgl_selesai','status_kegiatan'];
}
