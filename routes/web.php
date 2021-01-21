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
Route::get('auth/google', 'GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'GoogleController@handleGoogleCallback');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/user/json', 'HomeController@userJson');
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
    Route::get('/data/transaksi/hapus/{id}', 'TransaksiController@hapus');
    Route::get('/data/transaksi/tolak/{id}', 'TransaksiController@tolak');
    Route::get('/data/transaksi/batal/{id}', 'TransaksiController@batal');
    Route::get('/data/transaksi/proses/{id}', 'TransaksiController@proses');

    Route::post('/dp/update', 'TransaksiController@dp');
    Route::post('/lunas/update', 'TransaksiController@lunas');

    Route::get('/data/kontak', 'KontakController@index');
    Route::post('/data/kontak/edit/{id}', 'KontakController@update');

    Route::post('/pesan/gedungraya1', 'SewaController@gedungRaya1');
    Route::post('/pesan/gedungraya2', 'SewaController@gedungRaya2');
    Route::get('/pesanan-saya', 'SewaController@pesananSaya');
    Route::post('/pesanan-saya/upload-dp', 'SewaController@uploadDP');
    Route::post('/pesanan-saya/upload-pelunasan', 'SewaController@uploadLunas');

    Route::get('/laporan/transaksi', 'LaporanController@index');
    Route::get('/laporan/transaksi/gd1/tanggal', 'LaporanController@gd1Tanggal');
    Route::get('/laporan/transaksi/gd1/bulan', 'LaporanController@gd1bulan');
    Route::get('/laporan/transaksi/gd1/tahun', 'LaporanController@gd1tahun');
    Route::get('/laporan/transaksi/gd2/tanggal', 'LaporanController@gd2Tanggal');
    Route::get('/laporan/transaksi/gd2/bulan', 'LaporanController@gd2bulan');
    Route::get('/laporan/transaksi/gd2/tahun', 'LaporanController@gd2tahun');

    Route::post('/pesan/gedungraya1/admin', 'SewaController@gedungRaya1admin');
    Route::post('/pesan/gedungraya2/admin', 'SewaController@gedungRaya2admin');
});
