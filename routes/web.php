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
// ==============================================================================================

// =================================== LOGIN ===============================================
Route::get('/acceso', 'UserController@acceso')->name('login');
Route::post('/accediendo', 'UserController@login')->name('user.login');
// ==============================================================================================

// =================================== ADMINISTRADOR ===============================================
Route::get('/Administracion', 'UserController@index')->name('administracion');
// ==============================================================================================

  // =================================== Nosotros ===============================================
Route::get('/nosotros', 'NosotrosController@index')->name('nosotros');
// ==============================================================================================

  // =================================== trabaja con Nosotros ===============================================
Route::get('/trabaja_con_nosotros', 'TrabajaController@index')->name('trabaja_con_nosotros');

// ==============================================================================================

  // =================================== Corporativo ===============================================
Route::get('/empresas','EmpresaController@index')->name('empresas');
Route::get('/empresas/moviles','EmpresaController@moviles')->name('empresas.moviles');
Route::get('/empresas/fijas','EmpresaController@fijas')->name('empresas.fijas');
Route::get('/empresas/soluciones','EmpresaController@soluciones')->name('empresas.soluciones');

// ==============================================================================================

// =================================== Moviles ===============================================
Route::get('/moviles','MovilController@index')->name('moviles');

// ==============================================================================================

// =================================== Hogar/fija ===============================================
Route::get('/hogar','HogarController@index')->name('hogar');
// ==============================================================================================

// =================================== LOCACIÓN ===============================================
Route::post('/locacion/provincias','LocacionController@cargarProvincias')->name('locacion.provincias');
Route::post('/locacion/distritos','LocacionController@cargarDistritos')->name('locacion.distritos');

// =================================== FORMULARIOS ===============================================
Route::post('/formulario/registro/{area}','FormularioController@store')->name('form.registro');

// =================================== CLIENTES ===============================================
Route::get('/clientes/nuevos','ClienteController@nuevos')->name('clientes.nuevos');
Route::get('/clientes/asignados','ClienteController@asignados')->name('clientes.asignados');
// ==============================================================================================
