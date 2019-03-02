<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    public static function lastComments($count = 6){
        return Comment::orderBy('created_at', 'desc')->take($count)->get();
    }
    public function anons(){
        $str = substr($this->comment,0,100);
        $str = substr($str,0, strripos($str,' '));
        return $str.' ...';
    }
}
