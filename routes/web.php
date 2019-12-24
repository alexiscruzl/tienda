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
//rutas pagina plana
Route::get('/', function () {
    return view('welcome');
});
Route::get('/prin','FlatPage@index');

Route::get('/nosotros','FlatPage@nosotros');
Route::get('/productos','FlatPage@productos');
Route::get('/contacto','FlatPage@contacto');