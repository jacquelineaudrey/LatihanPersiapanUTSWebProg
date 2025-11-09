<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // Relasi: 1 Category punya banyak Article
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
