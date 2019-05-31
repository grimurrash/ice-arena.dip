<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('categories.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = Validator::make([
            'name' => $request->name,
            'link' => Str::slug($request->name,'-')
        ], [
            'name' => ['required', 'string'],
            'link' => ['required', 'string', 'max:255', 'unique:categories'],
        ]);
        if ($valid->fails()) {
            Session::flash('error', 'Категория с таким именем уже существует');
            return redirect()->back()->withInput();
        }
        Category::create([
            'name' => $request->name,
            'link' => Str::slug($request->name,'-')
        ]);
        Session::flash('message', 'Категория успешно создана');
        return redirect()->route('categories.index');

    }
    public function delete(Request $request, Category $category){
        $category->delete();
        Session::flash('message', 'Категория успешно удалена');
        return redirect()->route('categories.index');
    }
}
