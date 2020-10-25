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

Route::get('/home', function () {
    return view('jam.home');
});

Route::get('/login', function () {
    return view('jam.login');
});

Route::get('/brands', function () {
    return view('jam.brands');
});

Route::get('/register', function () {
    return view('jam.register');
});

Route::get('/men', function () {
    return view('jam.men');
});

Route::get('/checkout', function () {
    return view('jam.checkout');
});

Route::get('/base', function () {
    return view('admin2.base');
});

Route::get('/beranda', function () {
    return view('admin2.beranda');
});

Route::get('/produk', function () {
    return view('admin2.produk');
});

Route::get('/kategori', function () {
    return view('admin2.kategori');
});

Route::get('/promo', function () {
    return view('admin2.promo');
});

Route::get('/login', function () {
    return view('admin2.login');
});

Route::get('/register', function () {
    return view('admin2.register');
});