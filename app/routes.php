<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::model('juego', 'Juego');

Route::get('/', 'JuegoController@index');
Route::get('/crear', 'JuegoController@crear');
Route::get('/editar/{juego}', 'JuegoController@editar');
Route::get('/eliminar/{juego}', 'JuegoController@eliminar');

Route::post('/crear', 'JuegoController@handleCrear');
Route::post('/editar', 'JuegoController@handleEditar');
Route::post('/eliminar', 'JuegoController@handleEliminar');


