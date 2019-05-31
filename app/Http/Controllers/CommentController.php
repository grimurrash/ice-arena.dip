<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::where('publish',0)->paginate(10);
        return view('admin.comments.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $link)
    {
        $post = Post::where('link', $link)->first();
        $valid = Validator::make($request->all(), [
            'comment' => 'required|string',
            'author' => 'required|string'
        ]);
        if (!$valid->fails()) {
            Comment::create([
                'comment' => $request->comment,
                'author' => $request->author,
                'post_id' => $post->id,
            ]);
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        $comment->update([
            'publish'=>1
        ]);
        Session::flash('message','Комментарий разрешен');
        return redirect()->route('comments.index');
    }

    public function delete(Comment $comment){
        $comment->delete();
        Session::flash('message','Комментарий удален');
        return redirect()->route('comments.index');
    }
}
