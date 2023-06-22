<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    protected $fillable = [
        'video_baslik',
        'video_aciklama',
        'video_etiketler',
        'kategori_id',
        'video_yolu',
        'video_dosya_yolu',
        'video_ucret'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategoriler::class, 'kategori_id');
    }
}
