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

  Route::get('/', 'DoadorController@principal')->name('principal');;
//  Route::get('/', ['as'=>'admin.index', 'uses'=>'doadorController@principal']);

  //ROUTE DOADOR
    Route::group(['prefix' => 'doador'], function (){
        Route::get('inserir-novo', 'DoadorController@inserir')->name('doador.inserir');
        Route::get('listar', 'DoadorController@listar')->name('doador.listar');
        Route::get('{doador}', 'DoadorController@editar')->name('doador.editar');
        Route::put('{doador}/atualizar', 'DoadorController@atualizar')->name('doador.atualizar');
        Route::post('/salvar', 'DoadorController@salvar')->name('doador.salvar');
        Route::get('{doador}/excluir', 'DoadorController@excluir')->name('doador.excluir');
    });

  //ROUTE FUNCIONÁRIO
    Route::group(['prefix' => 'funcionario'], function (){
        Route::get('inserir-novo', 'FuncionarioController@inserir')->name('funcionario.inserir');
        Route::get('listar', 'FuncionarioController@listar')->name('funcionario.listar');
        Route::get('{funcionario}', 'FuncionarioController@editar')->name('funcionario.editar');
        Route::put('{funcionario}/atualizar', 'FuncionarioController@atualizar')->name('funcionario.atualizar');
        Route::post('/salvar', 'FuncionarioController@salvar')->name('funcionario.salvar');
        Route::get('{funcionario}/excluir', 'FuncionarioController@excluir')->name('funcionario.excluir');
    });

  //ROUTE AGENDAMENTO
  Route::group(['prefix' => 'agendamento'], function (){
    Route::get('inserir-novo', 'AgendamentoController@inserir')->name('agendamento.inserir');
    Route::get('listar', 'AgendamentoController@listar')->name('agendamento.listar');
    Route::get('{agendamento}', 'AgendamentoController@editar')->name('agendamento.editar');
    Route::put('{agendamento}/atualizar', 'AgendamentoController@atualizar')->name('agendamento.atualizar');
    Route::post('/salvar', 'AgendamentoController@salvar')->name('agendamento.salvar');
    Route::get('{agendamento}/excluir', 'AgendamentoController@excluir')->name('agendamento.excluir');
});


