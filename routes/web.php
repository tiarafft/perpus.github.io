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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'buku'], function() {
    Route::get('/', 'BukuController@index');
    Route::get('/tambah', 'BukuController@tambah');
    Route::post('/', 'BukuController@simpan');
    Route::get('/{id}', 'BukuController@edit');
    Route::put('/{id}', 'BukuController@update');
	Route::delete('/{id}', 'BukuController@hapus');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'anggota'], function() {
    Route::get('/', 'AnggotaController@index');
    Route::get('/tambah', 'AnggotaController@tambah');
    Route::post('/', 'AnggotaController@simpan');
    Route::get('/{id}', 'AnggotaController@edit');
    Route::put('/{id}', 'AnggotaController@update');
	Route::delete('/{id}', 'AnggotaController@hapus');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
