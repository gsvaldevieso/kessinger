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
		return view('inicio.index');
	});

Auth::routes();
Route::resource('authors', 'AuthorsController');
Route::resource('perfil', 'PerfilController');
Route::get('/publicacoes', 'PublicacoesController@index');
Route::get('/inativar', 'InactivateUserController@index');
Route::post('/inativar', 'InactivateUserController@inativar');
Route::get('/filtro', 'FiltroController@index')->name('filtro');
Route::resource('publicacoes', 'PublicacoesController');
Route::resource('periodicos', 'PeriodicosController');
