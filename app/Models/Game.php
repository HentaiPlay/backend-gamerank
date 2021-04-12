<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function category()
    {
        return $this->belongsToMany(Category::class, 'category_game');
    }

    public function studios()
    {
        return $this->belongsToMany(Studio::class, 'studio_game');
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }
}
