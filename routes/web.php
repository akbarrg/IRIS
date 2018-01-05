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
    return view('home');
});

Route::get('/gallery', 'GalleryController@index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery/prewedding', 'PreweddingController@index');

Route::get('/gallery/engagement', function () {
    return view('engagement');
});

Route::get('/gallery/wedding', function () {
    return view('wedding');
});

Route::get('/gallery/honeymoon', function () {
    return view('honeymoon');
});
