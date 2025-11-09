<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $fillable = ['name', 'job', 'image'];

    // Relasi: Satu writer bisa menulis banyak artikel
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}