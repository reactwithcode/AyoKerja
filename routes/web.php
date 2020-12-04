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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::match(['get', 'post'], '/daftar', 'App\Http\Controllers\DaftarController@index');
Route::get('/pendaftarkerja', 'App\Http\Controllers\PendaftarController@index');
Route::get('/pendaftarkerja/detail/{id}', 'App\Http\Controllers\PendaftarController@detail');
Route::get('/tentang', 'App\Http\Controllers\TentangController@index');
Route::get('/kontak', 'App\Http\Controllers\KontakController@index');
