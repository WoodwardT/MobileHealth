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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';*/



Route::get('/', function () {return view('home.index');});
Route::get('/courses', function () {return view('home.courses');});
Route::get('/book', function () {return view('home.book');});
Route::get('/aboutus', function () {return view('home.aboutus');});
Route::get('/contactus', function () {return view('home.contactus');});

Route::get('/play', function () {return view('home.play');});
Route::get('/lab08', function () {return view('home.lab08');});
Route::get('/lab12a', function () {return view('home.lab12a');});
Route::get('/results', function () {return view('home.results');});
Route::get('/bookcourse', function () {return view('home.bookcourse');});
Route::get('/payment', function () {return view('home.payment');});

//Route::get('/AboutUs', 'App\Http\Controllers\ActivityController@AboutUs');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
