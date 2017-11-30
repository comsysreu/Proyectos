<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Clientes
Route::get('cl_mostraruno/{id}', 'ClientesAppController@mostrar_uno');
Route::get('cl_mostrar', 'ClientesAppController@mostrar');
Route::post('cl_guardar', 'ClientesAppController@guardar');
Route::delete('cl_eliminar/{id}', 'ClientesAppController@eliminar');
Route::put('cl_actualizar/{id}', 'ClientesAppController@actualizar');


//Ventas
Route::get('ve_mostraruno/{id}', 'VentasAppController@mostrar_uno');
Route::get('ve_mostrar', 'VentasAppController@mostrar');
Route::post('ve_guardar', 'VentasAppController@guardar');
Route::delete('ve_eliminar/{id}', 'VentasAppController@eliminar');
Route::put('ve_actualizar/{id}', 'VentasAppController@actualizar');
