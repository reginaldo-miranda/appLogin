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

// Route::get('/', function () {
//    return view('welcome');
//});

Route::get('usuarios_login','usuariosController@ApresntarFormulariosLogin');
Route::post('usuarios_fazer_login', 'usuariosController@FazerLogin');

//temporario
Route::get('inserir_usuario','usuariosController@InserirUsuario');