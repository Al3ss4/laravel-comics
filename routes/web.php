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
    return view('home');
});

Route::get('/comics', function () {
    $comics = config('comics');
    $data = ['series' => $comics];


    return view('comics', $data);
});

Route::get('comics/detail', function () {

    $comics_detail = config('comics-detail');
    $data = ['series' => $comics_detail[0]];


    return view('detail', $data);
});

