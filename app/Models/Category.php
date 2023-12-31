<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function articles()
    {
        return $this->hasMany(Article::class)->onDelete('casade');
    }
    public function images()
    {
        return $this->hasMany(Image::class)->onDelete('casade');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
