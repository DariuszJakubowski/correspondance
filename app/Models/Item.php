<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Item extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = ['title', 'description', 'type', 'created_by'];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->created_by = Auth::user()->id ?? 1;
        });
    }

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
        return $this->belongsToMany(User::class, 'items_has_recipients');
    }

    public function files()
    {
        return $this->hasMany( File::class);
    }

}
