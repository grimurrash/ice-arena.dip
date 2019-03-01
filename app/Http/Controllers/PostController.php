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
    public function index($search = "")
    {
        $posts = Post::all();
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
            $link = $this->translit($request->title) . '.' . $file->getClientOriginalExtension();
            $valid = Validator::make([
                'image' => $request->image,
                'link' => $link
            ], [
                'link' => 'required|string|max:255|unique:images',
                'image' => 'required|image'
            ]);
            if (!$valid->fails()) {
                $file->move(public_path('images/upload'), $link);
                $image = Image::create([
                    'name' => $request->title,
                    'link' => $link
                ]);
            } else {
                $image = Image::where('link', $link)->first();
            }
            $post = Post::create([
                'title' => $request->title,
                'link' => $this->translit($request->title),
                'anons' => $request->anons,
                'text' => $request->text,
                'image_id' => $image->id,
                'category_id' => $request->category_id,
            ]);
            $message = "Пост категории успешно создан!";
            return view('admin.posts.index', compact('post', 'message'));
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
    public function show($link, $message = "")
    {
        $post = Post::where('link', $link)->first();
        return view('admin.posts.index', compact('post', 'message'));
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
        $error = '';
        $categories = Category::all();
        $images = Image::all();
        return view('admin.posts.edit', compact('post', 'error', 'images', 'categories'));
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
            'category_id' => 'required|string',
        ]);
        if (!$valid->fails()) {
            $post->update([
                'title' => $request->title,
                'link' => $this->translit($request->title),
                'anons' => $request->anons,
                'text' => $request->text,
                'image_id' => $request->image,
                'category_id' => $request->category_id,
            ]);
            $message = "Пост успешно отредактирован!";
            return view('admin.posts.index', compact('post', 'message'));
        } else {
            $error = $valid->messages();
            $categories = Category::all();
            $images = Image::all();
            return view('admin.posts.edit', compact('post', 'error', 'images', 'categories'));
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
        return view('admin.home', compact('posts'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $cat = Category::where('name', 'LIKE', "%$search%")->first();
        if (!$cat) {
            $posts = Post::where('title', 'LIKE', "%$search%")->orWhere('text', 'LIKE', "%$search%")->orWhere('anons', 'LIKE', "%$search%")->get();
        } else {
            $posts = Post::where('title', 'LIKE', "%$search%")->orWhere('text', 'LIKE', "%$search%")->orWhere('anons', 'LIKE', "%$search%")->orWhere('category_id', $cat->id)->get();
        }
        foreach ($posts as $post) {
            $post->title = str_replace($search, "<mark>{$search}</mark>", $post->title);
            $post->text = str_replace($search, "<mark>{$search}</mark>", $post->text);
            $post->anons = str_replace($search, "<mark>{$search}</mark>", $post->anons);
        }
        return view('admin.posts.posts', compact(['posts', 'search']));
    }

    public function translit($s)
    {
        $s = (string)$s; // преобразуем в строковое значение
        $s = trim($s); // убираем пробелы в начале и конце строки
        $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
        $s = preg_replace('/[^\p{L}0-9 ]/iu', '', $s);
//        $s = preg_replace('/\d/', '', $s); // удаляет все спецсимволы
        $s = trim($s); // убираем пробелы в начале и конце строки
        $s = strtr($s, array(' ' => '-', 'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'j', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ы' => 'y', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'ъ' => '', 'ь' => ''));
        return $s; // возвращаем результат
    }
}
