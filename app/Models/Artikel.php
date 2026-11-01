<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
    'judul',
    'slug',
    'kategori',
    'ringkasan',
    'isi',
    'gambar',
    'cloudinary_public_id',
    'tanggal_publikasi',
    'status',
];
}
