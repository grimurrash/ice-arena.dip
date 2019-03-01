<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\Reviews;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        $posts = Post::lastPost();
        $news_more = Post::newsMore(4);
        return view('welcome', compact('posts', 'news_more'));
    }

    public function posts()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('posts', compact(['posts', 'categories']));
    }

    public function posts_index($link)
    {
        $post = Post::where('link', $link)->first();
        $news_more = Post::newsMore(6);
        $categories = Category::all();
        return view('posts.index', compact(['post', 'news_more', 'categories']));
    }
    public function comments(){
        $comments = Comment::lastComments();
        return view('reviews',compact('comments'));
    }
}
