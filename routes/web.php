<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FrontController@index');
Route::get('/tentang-kami', 'FrontController@tentang');
Route::get('/galery', 'FrontController@galery');
Route::get('/harga', 'FrontController@harga');
Route::get('/kontak', 'FrontController@kontak');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/register', 'LoginController@register');
Route::post('/register', 'LoginController@storeRegister');

Route::get('/home', 'HomeController@index');
Route::get('/ganti-password', 'HomeController@gantipass');
Route::post('/data/ganti-password', 'HomeController@updatepass');
Route::get('/logout', 'LoginController@logout');

Route::get('/data/slideshow', 'SlideController@index');
Route::get('/data/slideshow/tambah', 'SlideController@add');
Route::post('/data/slideshow/tambah', 'SlideController@store');
Route::get('/data/slideshow/edit/{id}', 'SlideController@edit');
Route::post('/data/slideshow/edit/{id}', 'SlideController@update');
Route::get('/data/slideshow/delete/{id}', 'SlideController@delete');

Route::get('/data/tentang-kami', 'TentangController@index');
Route::post('/data/tentang/edit/{id}', 'TentangController@update');

Route::get('/data/galery', 'GaleryController@index');
Route::get('/data/galery/tambah', 'GaleryController@add');
Route::post('/data/galery/tambah', 'GaleryController@store');
Route::get('/data/galery/edit/{id}', 'GaleryController@edit');
Route::post('/data/galery/edit/{id}', 'GaleryController@update');
Route::get('/data/galery/delete/{id}', 'GaleryController@delete');

Route::get('/data/harga', 'HargaController@index');
Route::get('/data/harga/edit/{id}', 'HargaController@edit');
Route::post('/data/harga/edit/{id}', 'HargaController@update');
Route::get('/data/transaksi', 'TransaksiController@index');
Route::get('/data/transaksi/setujui/{id}', 'TransaksiController@setujui');
Route::get('/data/transaksi/tolak/{id}', 'TransaksiController@tolak');

Route::get('/data/kontak', 'KontakController@index');
Route::post('/data/kontak/edit/{id}', 'KontakController@update');

Route::post('/pesan/gedungraya1', 'SewaController@gedungRaya1');
Route::post('/pesan/gedungraya2', 'SewaController@gedungRaya2');
Route::get('/pesanan-saya', 'SewaController@pesananSaya');
