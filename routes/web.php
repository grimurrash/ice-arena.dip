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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin', function () {
    return view('auth.login');
});
Route::get('admin', function () {
    return view('home');
});

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
    Route::get('/posts', 'PostController@create')->name('posts.create');
    Route::post('/posts', 'PostController@store');
    Route::get('/posts/{id}/edit', 'PostController@edit');
    Route::post('/posts/{id}/update', 'PostController@update');
    Route::get('/posts/{id}/delete', 'PostController@delete');
    Route::post('/posts/{id}/comments', 'CommentController@store');
    Route::post('/categors/store','CategorController@store');
    Route::get('/categors','CategorController@index');
    Route::get('/categors/create','CategorController@create');
});