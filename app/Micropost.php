<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //このユーザがお気に入りのMicropost
    public function favourite_users()
    {
        return $this->belongsToMany(User::class, 'favourites', 'micropost_id', 'user_id');
    }
    
}
