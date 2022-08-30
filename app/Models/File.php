<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    // m2m
    public function items()
    {
        return $this->belongsToMany(Item::class, 'items_has_files');
    }
}
