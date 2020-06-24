<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'coverpost',
        'title',
        'subtitle',
        'body',
        'slug'
    ];

    // User
    public function user() {
        return $this->belongsTo('App\User');
    }

    // Comments
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
