<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'Controller@index');

Route::get('kontakty',function (){
    return view('kontakty');
})->name('kontakty');


Route::get('posts', 'Controller@posts_default');
Route::get('posts/{link}', 'Controller@posts_index');
Route::get('posts/categories/{link}','Controller@categories');
Route::get('reviews', 'Controller@comments')->name('reviews');
Route::post('/posts/{post}/comments', 'CommentController@store')->name('comment.store');
Route::post('reviews','ReviewController@store')->name('review.store');

Route::get('post/default',function (){
    return view('posts.default');
})->name('posts.default');



Route::get('uslugi', function () {
    return view('uslugi');
})->name('uslugi');
Route::get('uslugi/massovoe-katanie', function () {
    return view('uslugi.massovoe-katanie');
})->name('massovoe-katanie');

Route::get('uslugi/arenda-ledovogo-polya', function () {
    return view('uslugi.arenda-ledovogo-polya');
})->name('arenda-ledovogo-polya');

Route::get('uslugi/prokat-zatochka-i-formovka-konkov', function () {
    return view('uslugi.prokat-zatochka-i-formovka-konkov');
})->name('prokat-zatochka-i-formovka-konkov');

Route::get('uslugi/sportivnoe-katanie', function () {
    return view('uslugi.sportivnoe-katanie');
})->name('sportivnoe-katanie');

Route::get('uslugi/razmeshchenie-informatsii-reklamy', function () {
    return view('uslugi.razmeshchenie-informatsii-reklamy');
})->name('razmeshchenie-informatsii-reklamy');

Route::get('admin', function ($message = '') {
    if (Auth::check()) {
        return view('admin.home', compact(['message']));
    } else {
        return view('auth.login');
    }
})->name('admin');
Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('home',function ($message = ''){
        return view('admin.home',compact(['message']));
    })->name('admin.home');


//    Posts
    Route::resource('admin/posts','PostController');
    Route::get('admin/posts/{post}/delete','PostController@delete')->name('posts.delete');
    Route::post('admin/posts/search', 'PostController@search')->name('posts.search');

//    Comments
    Route::get('admin/comments','CommentController@index')->name('comments.index');
    Route::get('admin/comments/{comment}/edit','CommentController@edit')->name('comments.edit');
    Route::get('admin/comments/{comment}/delete','CommentController@delete')->name('comments.delete');

//    Reviews
    Route::get('admin/reviews','ReviewController@index')->name('reviews.index');
    Route::get('admin/reviews/{review}/edit','ReviewController@edit')->name('reviews.edit');
    Route::get('admin/reviews/{review}/delete','ReviewController@delete')->name('reviews.delete');


//    Images
    Route::get('admin/images', 'ImageController@index')->name('images.index');
    Route::post('admin/images', 'ImageController@store')->name('images.store');
    Route::get('admin/images/{image}/delete', 'ImageController@delete')->name('images.delete');

//    Categories
    Route::get('admin/categories', 'CategoryController@index')->name('categories.index');
    Route::post('admin/categories', 'CategoryController@store')->name('categories.store');
    Route::get('admin/categories/{category}/delete', 'CategoryController@delete')->name('categories.delete');

});


