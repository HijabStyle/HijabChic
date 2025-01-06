<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'name',
        'judul',
        'deskripsi',
        'konten_1',
        'konten_2',
        'konten_3',
        'deskripsi_konten_1',
        'deskripsi_konten_2',
        'deskripsi_konten_3',
        'cta',
        'cta_deskripsi',
        'cta_foto_1',
        'cta_foto_2',
        'about_us',
    ];
}
