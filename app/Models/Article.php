<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'content',
        'category_id',
        'writer_id',
        'views',
        'image',
    ];

    // Relasi: Artikel milik satu kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Relasi: Artikel ditulis oleh satu writer
    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
}