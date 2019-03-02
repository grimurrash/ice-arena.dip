<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($message = "")
    {
        return view('admin.categories.create', compact('message'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $link = $this->translit($request->name);
        $valid = Validator::make([
            'name' => $request->name,
            'link' => $link
        ], [
            'name' => ['required', 'string'],
            'link' => ['required', 'string', 'max:255', 'unique:categories'],
        ]);
        if ($valid->fails()) {
            $this->create("Категория с таким названием уже существует.");
        } else {
            Category::create([
                'name' => $request->name,
                'link' => $link
            ]);
            $categories = Category::all();
            return view('admin.categories.index', compact('categories'));
        }

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
