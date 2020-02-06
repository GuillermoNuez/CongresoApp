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

Route::get('/users','Auth\RegisterController@index')->middleware('auth');
Route::resource('User', "UserCustomController");
Route::resource('Ponencia', "PonenciaController");
Route::resource('Congreso', "CongresoController");
Route::resource('UserPonencia', "UserponenciaController");
Route::resource('Pago', "PagoController");
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
