<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::orderBy('publish')->paginate(10);
        return view('admin.reviews.index',compact('reviews'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'comment' => 'required|string',
            'author' => 'required|string'
        ]);
        if (!$valid->fails()) {
            Session::flash('message','Отзыв отправлен на модерацию');
            Review::create([
                'comment' => $request->comment,
                'author' => $request->author,
            ]);
        }else{
            Session::flash('errors',$valid->errors()->first());
        }
        return redirect()->route('reviews')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        $review->update([
            'publish'=>1
        ]);
        Session::flash('message','Комментарий разрешен');
        return redirect()->route('reviews.index');
    }

    public function delete(Review $review){
        $review->delete();
        Session::flash('message','Комментарий удален');
        return redirect()->route('reviews.index');
    }
}
