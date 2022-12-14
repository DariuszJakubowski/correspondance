<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['shortname', 'name'];
    // m2m
    public function users()
    {
        return $this->belongsToMany(User::class, 'departments_has_users');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
