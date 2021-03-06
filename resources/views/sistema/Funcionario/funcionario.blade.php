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
                        <h5 class="card-title"> Todos os Funcionários</h5>
                    </div>
                    <div class="col-md-2">
                            <div class="panel-heading"><a href="{{ route('principal') }}" class="btn btn-secondary btn-sm pull-right"><i class="fa fa-plus"></i> VOLTAR</a></div>
                    </div>
                    <div class="col-md-2">
                            <div class="panel-heading"><a href="{{ route('funcionario.inserir') }}" class="btn btn-info btn-sm pull-right"><i class="fa fa-plus"></i> INSERIR NOVO</a></div>
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
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th>Opções</th>
                        </tr>
                    <tbody>
                            @forelse ($funcionario as $funcionarios)
                            <tr>
                                <td> {{$funcionarios->id}} </td>
                                <td> {{$funcionarios->nome}} </td>
                                <td> {{$funcionarios->telefone}} </td>
                                <td> {{$funcionarios->email}} </td>
                                <td>
                                    <a class="btn btn-danger" href="{{ route('funcionario.excluir', $funcionarios->id) }}">Excluir</a>
                                    <a class="btn btn-info" href="{{ route('funcionario.editar', $funcionarios->id) }}">Editar</a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="5">Sem funcionários cadastrados.</td>
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
