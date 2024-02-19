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
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id_news');
            $table->string('news_title');
            $table->string('slug');
            $table->text('news_details');
            $table->integer('id_kategori');
            $table->integer('id_admin');
            $table->string('news_status')->default('Draft');
            $table->date('published_date')->nullable();
            $table->integer('dibaca')->default(0);
            $table->text('thumbnail')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};