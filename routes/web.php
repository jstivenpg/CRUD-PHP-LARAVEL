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

Route::get('/', function () {
    return view('welcome');
});

// Route::post('registros/{id?}/delete', 'HomeController@destroy');

Route::post('usuario/{id?}/delete', 'UsuarioController@destroy');
Route::get('usuario/{id?}/delete', 'UsuarioController@destroy');

Route::post('cliente/{id?}/delete', 'ClienteController@destroy');
Route::get('cliente/{id?}/delete', 'ClienteController@destroy');

Route::resource('cliente','ClienteController');

Route::resource('usuario','UsuarioController');
Route::resource('cliente','ClienteController');

Route::get('/usuario/destroy/{id}', 'UsuarioController@delete');
Route::get('/cliente/destroy/{id}', 'ClienteController@delete');

Route::resource('home','HomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/cliente', 'ClienteController@index')->name('home');

Auth::routes();

Route::get('/usuario', 'UsuarioController@index')->name('home');
