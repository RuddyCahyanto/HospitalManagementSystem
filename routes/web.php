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

// Route::get('/home', function () {
//     return view('HomePage.home');
// });

Route::resource('users', 'Users\Controllers\UsersController');

Route::resource('data-kelurahan', 'DataKelurahan\Controllers\DataKelurahanController');
Route::resource('registrasi-pasien', 'RegistrasiPasien\Controllers\RegistrasiPasienController');
Route::get('data-pasien', 'RegistrasiPasien\Controllers\RegistrasiPasienController@index')->name('data-pasien');

Auth::routes();

Route::get('home', 'HomePage\Controllers\HomeController@index')->name('home');
