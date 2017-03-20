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
//middleware para seguridad de rutas a nuestro Auth
Route::group(['middleware' => 'cors'], function(){
	Route::post('/auth_iniciar', 'InicioSession@userAuth');
	
	// rutas para hijos Model
	
});
Route::get('/hijosListar/{id?}', 'HijosController@index');
	Route::get('/hijosFIltar/{id?}', 'HijosController@filtar');
	Route::post('/hijosAgregar', 'HijosController@create');
	Route::post('/hijosActualizar/{id}', 'HijosController@update');
	Route::delete('/hijosEliminar/{id}', 'HijosController@destroy');