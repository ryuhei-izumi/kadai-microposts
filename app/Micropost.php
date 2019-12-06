<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //お気に入り
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'user_favorites', 'microposts_id', 'user_id')->withTimestamps();
    }
}
