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
    
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/blogpost', function () {
    return view('blogpost');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/drivers', function () {
    return view('drivers');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/api', function () {
    return view('api');
});

Route::get('/registro', function () {
    return view('registro');
});
Route::get('/login', function () {
    return view('login');
});



