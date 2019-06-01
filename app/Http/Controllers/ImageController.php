<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.images.index', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $link = Str::slug($request->name, '-') . '.' . $file->getClientOriginalExtension();
        $valid = Validator::make([
            'image' => $request->image,
            'link' => $link
        ], [
            'link' => 'required|string|max:255|unique:images',
            'image' => 'required|image'
        ]);
        if ($valid->fails()) {
            Session::flash('error', 'Изобращение с таким названием уже сущетсвует');
            return redirect()->back()->withInput();
        }
        $file->move(public_path('images/upload'), $link);
        Image::create([
            'name' => $request->name,
            'link' => $link
        ]);
        Session::flash('message', 'Изобращение успешно добавлено');
        return redirect()->route('images.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function delete(Image $image)
    {
        if($image->post->count()==0){
            $image->delete();
            Session::flash('message','Изобращение удалено');
        }else{
            Session::flash('message','Нельзя удалить изобращение, так как оно привязано к посту');
        }
        return redirect()->route('images.index');

    }
}
