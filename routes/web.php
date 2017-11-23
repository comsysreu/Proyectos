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
Route::get('/clientes', function(){
	return view('clientes.index');
})->name('clientes');

Route::get('/proveedores', function(){
	return view('proveedores.index');
})->name('proveedores');

Route::get('/productos', function(){
	return view('productos.index');
})->name('productos');

Route::get('/ventas', function(){
	return view('ventas.index');
})->name('ventas');

Route::get('/usuarios', function(){
	return view('usuarios.index');
})->name('usuarios');
