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

Route::get('/nosotros', function () {
    return view('vista/nosotros');
})->name('nosotros');

Route::get('/trabaja_con_nosotros', function () {
    return view('vista/trabaja_con_nosotros');
})->name('trabaja_con_nosotros');


Route::get('/empresas','EmpresaController@index')->name('empresas');


Route::get('/moviles','MovilController@index')->name('moviles');


Route::get('/hogar','HogarController@index')->name('hogar');

