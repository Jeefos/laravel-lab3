<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // A Post belongs to one Author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // A Post has many Comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
