<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    public function image(){
        Post::belongsTo(Image::class);
    }
    public  function category(){
        Post::belongsTo(Categor::class);
    }
}
