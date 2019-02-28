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
})->name('home');

Auth::routes();

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/uslugi',function (){
    return view('uslugi');
})->name('uslugi');

Route::get('/uslugi/massovoe-katanie',function (){
    return view('uslugi.massovoe-katanie');
})->name('massovoe-katanie');

Route::get('/uslugi/arenda-ledovogo-polya',function (){
    return view('uslugi.arenda-ledovogo-polya');
})->name('arenda-ledovogo-polya');

Route::get('/uslugi/prokat-zatochka-i-formovka-konkov',function (){
    return view('uslugi.prokat-zatochka-i-formovka-konkov');
})->name('prokat-zatochka-i-formovka-konkov');

Route::get('/uslugi/sportivnoe-katanie',function (){
    return view('uslugi.sportivnoe-katanie');
})->name('sportivnoe-katanie');

Route::get('/uslugi/razmeshchenie-informatsii-reklamy',function (){
    return view('uslugi.razmeshchenie-informatsii-reklamy');
})->name('razmeshchenie-informatsii-reklamy');