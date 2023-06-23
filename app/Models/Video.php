<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos'; // Kullanılacak veritabanı tablosunun adı

    protected $fillable = [
        'video_baslik',
        'video_aciklama',
        'video_kategoriler',
        'video_tags',
        'video_yolu',
        'video_dosya_yolu',
        // Diğer doldurulabilir (fillable) sütunları buraya ekleyin
    ];
}
