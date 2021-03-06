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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/insert', function () {
    return view('insert');
});


Route::get('/showtable', function () {
    return view('showtable');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/update', function () {
    return view('update');
});
Route::get('/bookCount', function () {
    return view('bookCount');
});
Route::get('/bookListing', function () {
    return view('bookListing');
});
Route::get('/searchGenre', function () {
    return view('searchGenre');
});
Route::get('/showBackUpData', function () {
    return view('showBackUpData');
});

