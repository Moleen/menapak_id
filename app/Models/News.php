<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primaryKey = 'id_news';
    protected $fillable = ['news_title','news_details','id_kategori','id_admin','published_date','thumbnail'];
}