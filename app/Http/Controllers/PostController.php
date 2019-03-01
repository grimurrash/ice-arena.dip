<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $search = "";
        return view('admin.posts.posts', compact(['posts', 'search']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($message = "")
    {
        $categories = Category::all();
        return view('admin.posts.create', compact(['categories', 'message']));
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

        if (!$valid->fails()) {
            $file = $request->file('image');
            $image = Image::create([
                'name' => $request->title,
                'link' => $this->translit($request->title) . '.' . $file->getClientOriginalExtension(),
            ]);
            $file->move(public_path('/images/upload'), $image->link);
            $post = Post::create([
                'title' => $request->title,
                'link' => $this->translit($request->title),
                'anons' => $request->anons,
                'text' => $request->text,
                'image_id' => $image->id,
                'category_id' => $request->category_id,
            ]);
            return view('admin.posts.index', compact('post'));
        } else {
            $categories = Category::all();
            $message = $valid->messages();
            return view('admin.posts.create', compact(['categories', 'message']));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($link)
    {
        $post = Post::where('link', $link)->first();
        return view('admin.posts.index', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit($link)
    {
        $post = Post::where('link', $link)->first();
        $message = '';
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'message', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $link)
    {
        $post = Post::where('link', $link)->first();
        $valid = Validator::make($request->all(), [
            'title' => 'required|string|max:255|unique:posts,title,' . $post->id,
            'anons' => 'required|string',
            'text' => 'required|string',
            'image' => 'required|image',
            'category_id' => $request->category_id,
        ]);
        if (!$valid->fails()) {
            $file = $request->file('image');
            $valid = Validator::make([
                'link'=>$this->translit($request->title) . '.' . $file->getClientOriginalExtension()
            ],[
                'link' => 'required|string|max:255|unique:images,link,' . $post->image->id,
            ]);
            if (!$valid->fails()){
                $post->image->update([
                    'name' => $request->title,
                    'link' => $this->translit($request->title) . '.' . $file->getClientOriginalExtension(),
                ]);
            }
            $file->move(public_path('/images/upload'),  $post->image->link);
            $post->update([
                'title' => $request->title,
                'link' => $this->translit($request->title),
                'anons' => $request->anons,
                'text' => $request->text,
                'image_id' => $post->image->id,
                'category_id' => $request->category_id,
            ]);
            return view('admin.posts.index', compact('post'));
        } else {
            $message = '';
            $categories = Category::all();
            return view('admin.posts.edit', compact('post', 'message', 'categories'));
        }
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

    public function delete($link)
    {
        Post::where('link', $link)->first()->delete();
        $posts = Post::all();
        return view('home', compact('posts'));
    }

//    public function search(Request $request)
//    {
//        $search = $request->search;
//        $cat = Category::where('name', 'LIKE', "%$search%")->first();
//        if (!$cat) {
//            $posts = Post::where('title', 'LIKE', "%$search%")->orWhere('text', 'LIKE', "%$search%")->orWhere('anons', 'LIKE', "%$search%")->get();
//        } else {
//            $posts = Post::where('title', 'LIKE', "%$search%")->orWhere('text', 'LIKE', "%$search%")->orWhere('anons', 'LIKE', "%$search%")->orWhere('category_id', $cat->id)->get();
//        }
//        foreach ($posts as $post) {
//            $post->title = str_replace($search, "<mark>{$search}</mark>", $post->title);
//            $post->text = str_replace($search, "<mark>{$search}</mark>", $post->text);
//            $post->anons = str_replace($search, "<mark>{$search}</mark>", $post->anons);
//        }
//        return view('home', compact(['posts','search']));
//    }

    public function translit($s)
    {
        $s = (string)$s; // преобразуем в строковое значение
        $s = trim($s); // убираем пробелы в начале и конце строки
        $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
        $s = strtr($s, array('а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'j', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ы' => 'y', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'ъ' => '', 'ь' => ''));
        return $s; // возвращаем результат
    }
}
