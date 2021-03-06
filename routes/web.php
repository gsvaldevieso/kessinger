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
})->middleware(\App\Http\Middleware\CheckAuthMiddleware::class);

Auth::routes();
Route::resource('authors', 'AuthorsController');
Route::resource('perfil', 'PerfilController');
Route::get('/periodicos/meus', 'PeriodicosController@userPeriodics');
Route::get('/periodicos/excluir/{id}', 'PeriodicosController@destroy');
Route::get('/publicacoes', 'PublicacoesController@index');
Route::get('/analisar', 'PublicacoesController@analisar');
Route::post('/analisar/aprovar/{id}', 'PublicacoesController@aprovar');
Route::post('/analisar/rejeitar/{id}', 'PublicacoesController@rejeitar');
Route::get('/publicacoes/meus', 'PublicacoesController@userPublish');
Route::get('/publicacoes/periodico/{id}', 'PublicacoesController@filtro');
Route::get('/inativar', 'InactivateUserController@index');
Route::post('/inativar', 'InactivateUserController@inativar');
Route::get('/filtro', 'FiltroController@index')->name('filtro');
Route::post('/filtro', 'FiltroController@filter')->name('filtro-post');
Route::resource('publicacoes', 'PublicacoesController');
Route::resource('periodicos', 'PeriodicosController');

