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
    return view('root');
});
Route::get('/2', function () {
    return view('dos');
});
Route::get('/3', function () {
    return view('tres');
});
Route::get('/4', function () {
    return view('cuatro');
});
Route::get('/5', function () {
    return view('cinco');
});
Route::get('/6', function () {
    return view('seis');
});
Route::get('/7', function () {
    return view('siete');
});
Route::get('/8', function () {
    return view('ocho');
});
Route::get('/shop/camisa_blanca/corta', function () {
    return view('camisa_blanca_corta');
});
Route::get('/shop/camisa_blanca/larga', function () {
    return view('camisa_blanca_larga');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
