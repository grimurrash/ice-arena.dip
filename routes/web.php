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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

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


Route::middleware('auth')->group(function () {
    Route::get('home', function () {
        return view('home');
    });

    Route::get('/posts', 'PostController@index')->name('posts.index');
    Route::get('/posts/create', 'PostController@create')->name('posts.create');
    Route::post('/posts', 'PostController@store')->name('posts.store');
    Route::get('/posts/{link}', 'PostController@show')->name('posts.show');
    Route::get('/posts/{link}/edit', 'PostController@edit')->name('posts.edit');
    Route::post('/posts/{link}/update', 'PostController@update')->name('posts.update');
    Route::get('/posts/{link}/delete', 'PostController@delete')->name('posts.delete');
    Route::post('/posts/{link}/comments', 'CommentController@store')->name('comment.store');
    Route::post('/categories/store', 'CategoryController@store')->name('categories.store');
    Route::get('/categories', 'CategoryController@index');
    Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
});
Route::get('admin', function () {
    if (Auth::check()) {
        return view('home');
    } else {
        return view('auth.login');
    }
});
