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
    return view('kontenberita');
});

Route::get('index', 'TestController@index');
Route::get('pendaftaran','TestController@pendaftaran');
Route::post('404','TestController@nf');
Route::get('login','TestController@login');
Route::get('kategori','TestController@kategoriberita');
Route::get('tanggal','TestController@tanggal');
Route::post('admin','TestController@admin');
Route::get('info','TestController@info');
Route::get('test2', 'TestController@pegawai');