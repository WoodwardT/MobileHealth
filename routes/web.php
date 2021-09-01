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

Route::get('/', function () {return view('home.index');});
Route::get('/courses', function () {return view('home.courses');});
Route::get('/book', function () {return view('home.book');});
Route::get('/about', function () {return view('home.about');});
Route::get('/contact', function () {return view('home.contact');});

//Route::get('/AboutUs', 'App\Http\Controllers\ActivityController@AboutUs');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
