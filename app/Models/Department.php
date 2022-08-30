<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    // m2m
    public function users()
    {
        return $this->belongsToMany(User::class, 'departments_has_users');
    }
}
