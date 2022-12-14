<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = ['title', 'description', 'priority', 'incoming', 'created_by', 'current_recipient', 'recipient' ];

    protected $casts = [
        'incoming' => 'boolean', // poczta przychodząca lub wychodząca
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->created_by = Auth::user()->id ?? 1;
        });
    }


    /**  Relationships */

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function currentRecipient()
    {
        return $this->belongsTo(User::class, 'current_recipient');
    }

    // m2m
    public function recipients()
    {
        return $this->belongsToMany(User::class, 'posts_has_recipients');
    }

    public function files()
    {
        return $this->hasMany( File::class);
    }

    // end Relationships --------------------------------



}
