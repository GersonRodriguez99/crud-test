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

Route::get('/', 'ClienteController@index')->name('inicio');
Route::post('/agregar', 'ClienteController@store')->name('store');
Route::get('/editar/{id}', 'ClienteController@edit')->name('editar');
Route::get('/update/{id}','ClienteController@update')->name('update');
Route::delete('/eliminar/{id}' , 'ClienteControllerController@destroy')->name('eliminar');