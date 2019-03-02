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

Route::get('posts', 'Controller@posts_default');
Route::get('posts/{link}', 'Controller@posts_index');
Route::get('posts/categories/{link}','Controller@categories');
Route::get('reviews', 'Controller@comments')->name('reviews');
Route::post('/posts/{link}/comments', 'CommentController@store');
Route::post('/posts/search', 'PostController@search')->name('posts.search');
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
    Route::get('admin/images', 'ImageController@index')->name('images.index');
    Route::get('admin/images/create', 'ImageController@create')->name('images.create');
    Route::post('admin/images/create', 'ImageController@store')->name('images.store');
    Route::get('admin/posts', 'PostController@index')->name('posts.index');
    Route::get('admin/posts/create', 'PostController@create')->name('posts.create');
    Route::post('admin/posts', 'PostController@store')->name('posts.store');
    Route::get('admin/posts/{link}', 'PostController@show')->name('posts.show');
    Route::get('admin/posts/{link}/edit', 'PostController@edit')->name('posts.edit');
    Route::post('admin/posts/{link}/update', 'PostController@update')->name('posts.update');
    Route::get('admin/posts/{link}/delete', 'PostController@delete')->name('posts.delete');
    Route::post('admin/categories/store', 'CategoryController@store')->name('categories.store');
    Route::get('admin/categories', 'CategoryController@index')->name('categories.index');
    Route::get('admin/categories/create', 'CategoryController@create')->name('categories.create');
});


