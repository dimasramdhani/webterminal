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

Route::resource('kontak','Kontak'); //tambahkan baris ini

//route CRUD

Route::get('/jadwal','JadwalController@index');
Route::get('/','JadwalController@service');

Route::get('/', function () {
   // return view('pages.landing-pages');
    return view('index');
});

Route::get('/create', function () {
   // return view('pages.landing-pages');
    return view('kontak_create');
});

Route::get('/', function () {
   // return view('pages.landing-pages');
    return view('index');
});

Route::get('/dashboard', function () {
   // return view('pages.landing-pages');
    return view('dashboard');
});



Route::get('/news', function () {
   // return view('pages.landing-pages');
    return view('news/2018-1/index');
});

Route::get('/database/baterai', function () {
   // return view('pages.landing-pages');
    return view('databaseBAT/index ');
});

Route::get('/kegiatan', function () {
   // return view('pages.landing-pages');
    return view('kegiatan/index ');
});

Route::get('/galeri', function () {
   // return view('pages.landing-pages');
    return view('galeri/index ');
});

Route::get('/atomizer', function () {
   // return view('pages.landing-pages');
    return view('atomizer/index');
});

Route::get('/mod', function () {
   // return view('pages.landing-pages');
    return view('mod/index');
});

Route::get('/coil', function () {
   // return view('pages.landing-pages');
    return view('coil/index');
});

Route::get('/kamus', function () {
   // return view('pages.landing-pages');
    return view('kamus/index');
});

Route::get('/profil', function () {
   // return view('pages.landing-pages');
    return view('profil/index');
});

Route::get('/rekomendasi', function () {
   // return view('pages.landing-pages');
    return view('rekomendasi/index');
});

Route::get('/armada', function () {
   // return view('pages.landing-pages');
    return view('armada/index');
});

/* contoh nambahin route baru
Route::get('/kalkulator', function () {
   // return view('pages.landing-pages');
    return view('kalkulator/kalkulator');
}); */


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


