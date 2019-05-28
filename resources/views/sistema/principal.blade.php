@extends('layout.base')

@section('conteudo')

    <div class="panel-header panel-header-sm"></div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="text-align:center">
                                <h3> Entre no Sistema </h3>
                                <a class="btn btn-secondary" href="{{ route('doador.listar') }}">Entrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
