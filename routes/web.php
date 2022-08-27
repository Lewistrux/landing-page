<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('inicio');

Route::get('/acceso', 'UserController@acceso')->name('login');
Route::post('/accediendo', 'UserController@login')->name('user.login');

Route::get('/nosotros', 'NosotrosController@index')->name('nosotros');

Route::get('/trabaja_con_nosotros', 'TrabajaController@index')->name('trabaja_con_nosotros');


Route::get('/empresas','EmpresaController@index')->name('empresas');
Route::get('/empresas/moviles','EmpresaController@moviles')->name('empresas.moviles');
Route::get('/empresas/fijas','EmpresaController@fijas')->name('empresas.fijas');
Route::get('/empresas/soluciones','EmpresaController@soluciones')->name('empresas.soluciones');


Route::get('/moviles','MovilController@index')->name('moviles');


Route::get('/hogar','HogarController@index')->name('hogar');

