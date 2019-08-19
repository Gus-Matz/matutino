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


Route::get('/principal','MochilasController@index');

//miestra la vita del create
Route::get('/agregar','MochilasController@create');

//toda la informacion que llega a al formulario "alta", pasa al store.
Route::post('/agregar','MochilasController@store');

//
Route::get('/mostrar/{id}','MochilasController@show')->name('mochila.show');

//
Route::get('/editar/{id}','MochilasController@edit')->name('mochila.edit');

//
Route::post('/editar/{id}','MochilasController@update')->name('mochila.update');

//
Route::post('/borrar','MochilasController@destroy')->name('mochila.destroy');