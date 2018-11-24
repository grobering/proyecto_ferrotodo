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

Route::get('/empleados', 'EmpleadoController@index')->name('empleados');
Route::resource('/clientes', 'ClienteController');
Route::resource('/categorias', 'CategoriaController');
Route::resource('/proveedores', 'ProveedorController');
Route::resource('/materiales', 'MaterialController');
Route::resource('compras', 'CompraController');
Route::resource('/ventas', 'VentaController');