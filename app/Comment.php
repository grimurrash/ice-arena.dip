<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    public static function lastComments(){
        return Post::orderBy('created_at', 'desc')->take(6)->get();
    }
}
