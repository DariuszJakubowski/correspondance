<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'comment'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
