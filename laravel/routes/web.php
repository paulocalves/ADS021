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
Route::group(['prefix' => 'condominio'], function (){
  Route::get('listar', 'CondominioController@listar');
  Route::get('criar', 'CondominioController@criar');
  Route::get('{id}/editar', 'CondominioController@editar');
  Route::get('{id}/remover', 'CondominioController@remover');
  Route::get('salvar', 'CondominioController@salvar');
  });

  Route::group(['prefix' => 'morador'], function (){
  Route::get('listar', 'MoradorController@listar');
  Route::get('criar', 'MoradorController@criar');
  Route::get('{id}/editar', 'MoradorController@editar');
  Route::get('{id}/remover', 'MoradorController@remover');
  Route::get('salvar', 'MoradorController@salvar');
  });