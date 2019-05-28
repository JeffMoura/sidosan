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

  Route::get('/', 'DoadorController@principal');
//  Route::get('/', ['as'=>'admin.index', 'uses'=>'doadorController@principal']);

  //ROUTE SETORES
    Route::group(['prefix' => 'doador'], function (){
        Route::get('inserir-novo', 'DoadorController@inserir')->name('doador.inserir');
        Route::get('listar', 'DoadorController@listar')->name('doador.listar');
        Route::get('{doador}', 'DoadorController@editar')->name('doador.editar');
        Route::put('{doador}/atualizar', 'DoadorController@atualizar')->name('doador.atualizar');
        Route::post('/salvar', 'DoadorController@salvar')->name('doador.salvar');
        Route::get('{doador}/excluir', 'DoadorController@excluir')->name('doador.excluir');
    });

