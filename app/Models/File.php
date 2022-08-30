<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'url'];


    // m2m
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_has_files');
    }
}
