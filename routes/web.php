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

Route::get('/welcome', function () {
    return view('welcome_basic');
})->middleware('auth.basic');

Route::get('/', ['as'=>'home','uses'=>'AppController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/mensajes', 'Controller@mensajes');

Route::post('/añadirMensaje', 'Controller@añadirMensaje');

Route::get('/modificarPerfil', 'PerfilController@mostrar');

Route::post('/modificarPerfil', 'PerfilController@update');

