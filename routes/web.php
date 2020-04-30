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

Route::get('/web/index.html', function () {
    return view('profil');
});

Route::get('/karyawan','KaryawanController@index');
Route::get('/karyawan/create','KaryawanController@create');
Route::get('/karyawan/{karyawan}','KaryawanController@show');
Route::post('/karyawan','KaryawanController@store');
route::delete('/karyawan/{karyawan}','KaryawanController@destroy');
route::get('/karyawan/{karyawan}/edit','KaryawanController@edit');
route::patch('/karyawan/{karyawan}','KaryawanController@update');