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

// DB::listen(function($query){
// 	echo "<pre>{$query->sql}</pre>";
// });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('clientes', 'clientesController');
Route::resource('productos', 'productosController');
Route::resource('proveedores', 'proveedoresController');
Route::resource('usuarios', 'usuariosController');
Route::resource('ventas', 'ventasController');
Route::resource('clientes_proveedores', 'Clientes_ProveedoresController');


