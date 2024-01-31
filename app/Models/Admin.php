<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $fillable = ['username','password','email','nama_admin'];

    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->diffForHumans();
    }
}