<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        $search = "";
        return view('admin.posts.index', compact('posts','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'title' => 'required|string|max:255|unique:posts',
            'anons' => 'required|string',
            'text' => 'required|string',
            'image' => 'required|image',
            'category_id' => 'required'
        ]);
        if ($valid->fails()) {
            Session::flash('error', $valid->errors()->first());
            return redirect()->back()->withInput();
        }

        $file = $request->file('image');
        $link = Str::slug($request->title, '-') . '-' . Carbon::now()->format('dmHi') . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images/upload'), $link);
        $image = Image::create([
            'name' => $request->title,
            'link' => $link
        ]);
        $post = Post::create([
            'title' => $request->title,
            'link' => Str::slug($request->title),
            'anons' => $request->anons,
            'text' => $request->text,
            'image_id' => $image->id,
            'category_id' => $request->category_id,
        ]);
        Session::flash('message', 'Пост успешно создан');
        return redirect()->route('posts.show', $post);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {

        $post = Post::where('link', $post)->first();
        $categories = Category::all();
        $images = Image::all();
        return view('admin.posts.edit', compact('post', 'images', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $valid = Validator::make($request->all(), [
            'title' => 'required|string|max:255|unique:posts,title,' . $post->id,
            'anons' => 'required|string',
            'text' => 'required|string',
            'category_id' => 'required|string',
        ]);
        if ($valid->fails()) {
            Session::flash('error', $valid->errors()->first());
            return redirect()->back()->withInput();
        }
        $post->update([
            'title' => $request->title,
            'link' => Str::slug($request->title),
            'anons' => $request->anons,
            'text' => $request->text,
            'image_id' => $request->image,
            'category_id' => $request->category_id,
        ]);
        Session::flash('message', 'Пост успешно отредактирован!');
        return redirect()->route('posts.show',$post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function delete($post)
    {
        $post = Post::where('link', $post)->first();
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $posts = Post::where('title', 'LIKE', "%$search%")->orWhere('text', 'LIKE', "%$search%")->orWhere('anons', 'LIKE', "%$search%")->orWhere('category_id','LIKE',"%$search%")->paginate(10);

        foreach ($posts as $post) {
            $post->title = str_replace($search, "<mark>{$search}</mark>", $post->title);
            $post->text = str_replace($search, "<mark>{$search}</mark>", $post->text);
            $post->anons = str_replace($search, "<mark>{$search}</mark>", $post->anons);
        }
        return view('admin.posts.index', compact('posts','search'));
    }
}
