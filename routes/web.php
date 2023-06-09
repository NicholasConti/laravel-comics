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

// ROUTE HOME PAGE
Route::get('/', function () {
    $data = [
        'comics' => config('comics')
    ];
    return view('home', $data);
})->name('home');


// ROUTE DETAIL COMIC
Route::get('/detail/{index}', function ($index) {

    $all_comics = config('comics');
    $comic = $all_comics[$index];

    return view('detail', compact('comic'));
})->name('detail');
