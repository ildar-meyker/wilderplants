<?php

use Illuminate\Support\Facades\Route;

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
    return view('catalog');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/html/info/1', function () {
    return view('info.1');
});

Route::get('/html/info/2', function () {
    return view('info.2');
});

Route::get('/html/info/light', function () {
    return view('info.light');
});
