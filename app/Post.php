<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function image()
    {
        return Post::belongsTo(Image::class);
    }

    public function category()
    {
        return Post::belongsTo(Category::class);
    }

    public function comments(){
        return Post::hasMany(Comment::class);
    }

    public static function lastPost()
    {
        return Post::orderBy('created_at', 'desc')->take(2)->get();
    }

    public static function newsMore($count)
    {
        return Post::orderBy('created_at', 'desc')->take($count)->get();
    }
}
