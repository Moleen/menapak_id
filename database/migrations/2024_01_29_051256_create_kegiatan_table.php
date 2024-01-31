<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('id_kegiatan');
            $table->string('nama_kegiatan');
            $table->string('deskripsi_kegiatan');
            $table->string('jenis_kegiatan');
            $table->integer('durasi');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('status_kegiatan');
            $table->text('foto_kegiatan');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};