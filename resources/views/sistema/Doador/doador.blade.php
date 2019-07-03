@extends('layout.base')

@section('conteudo')

    <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <!-- ./ notificacao -->
                    @if(Session::has('alerta'))
                            <div class="row" id="alerta">
                                <div class="col-md-12">
                                    <div class="alert bg-{{ Session::get('alerta')['class'] }}" role="alert">
                                        <em class="fa fa-lg fa-{{ isset(Session::get('alerta')['icone']) ?? 'check' }}">&nbsp;</em>
                                        {{ Session::get('alerta')['mensagem'] }}
                                    </div>
                                </div>
                            </div>
                        @endif
                    <div class="row">
                    <div class="col-md-8">
                        <h5 class="card-title"> Todos os Doadores</h5>
                    </div>
                    <div class="col-md-2">
                            <div class="panel-heading"><a href="{{ route('principal') }}" class="btn btn-secondary btn-sm pull-right"><i class="fa fa-plus"></i> VOLTAR</a></div>
                    </div>
                    <div class="col-md-2">
                            <div class="panel-heading"><a href="{{ route('doador.inserir') }}" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> INSERIR NOVO</a></div>
                    </div>
                </div>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="tabela">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Nome</th>
                            <th>Nascimento</th>
                            <th>Tipo Sang.</th>
                            <th>Telefone</th>
                            <th>Opções</th>
                        </tr>
                    <tbody>
                            @forelse ($doador as $doadores)
                            <tr>
                                <td> {{$doadores->id}} </td>
                                <td> {{$doadores->nome}} </td>
                                <td> {{date('d/m/Y', strtotime($doadores->data_nascimento))}} </td>
                                <td> {{$doadores->tipo_sanguineo}} </td>
                                <td> {{$doadores->telefone}} </td>
                                <td>
                                    <a class="btn btn-danger" href="{{ route('doador.excluir', $doadores->id) }}">Excluir</a>
                                    <a class="btn btn-info" href="{{ route('doador.editar', $doadores->id) }}">Editar</a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="5">Sem doadores cadastrados.</td>
                                </tr>
                            @endforelse
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>

        </div>
    </div>

@stop
