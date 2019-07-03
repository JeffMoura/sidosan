@extends('layout.base')

@section('conteudo')

    <div class="panel-header panel-header-sm"></div>
        <div class="content">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">
                        <span class="login100-form-logo">
						    <i><img width="300px" height="250px" src="{{ asset('../img/doesangue.png') }}"></i>  <h3> SIDOSAN - Sistema Gerenciador para Doação de Sangue</h3>
					    </span>
                        <div class="card-header">

                                <a class="btn btn-info" href="{{ route('doador.listar') }}">GERENCIAR DOADOR</a>
                                <a class="btn btn-danger" href="{{ route('funcionario.listar') }}">GERENCIAR FUNCIONÁRIO</a>
                                <a class="btn btn-secondary" href="{{ route('agendamento.listar') }}">AGENDAMENTO</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
@stop
