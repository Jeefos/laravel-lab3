<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // An Author has many Posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
