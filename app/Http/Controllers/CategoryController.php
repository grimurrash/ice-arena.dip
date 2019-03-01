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

        $valid = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
        ]);
        if ($valid->fails()) {
            $this->create("Категория с таким названием уже существует.");
        } else {
            Category::create([
                'name' => $request->name
            ]);
            $categories = Category::all();
            return view('admin.categories.index', compact('categories'));
        }

    }

}
