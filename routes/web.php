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
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('login', function () {
    return view('login');
});

Route::get('booking', function () {
    return view('booking');
});

Route::get('listing', function () {
    return view('listing');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('purchases', function () {
    return view('purchases');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
