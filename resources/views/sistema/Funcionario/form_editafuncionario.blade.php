@extends('layout.base')

@section('conteudo')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header"> <h5> <b>{{ isset($funcionario) ? 'Atualizar' : 'Cadastrar novo' }} </b>  Funcionário </h5></div>
              <div class="card-body">
                @if(isset($funcionario))
                    <form action="{{ route('funcionario.atualizar', $funcionario->id) }}" method="post">
                        {{ method_field('put"') }}
                @else
                <form action="{{ route('funcionario.salvar') }}" method="post">
                @endif
                {{ csrf_field() }}
                 <div class="row">
                        <div class="col-md-12 prl-1">
                            <div class="form-group has-error">
                                <input name="id" value="{{ $funcionario->id }}" type="hidden" class="form-control input-sm">
                            </div>
                        </div>
                </div>
                  <div class="row">
                    <div class="col-md-12 prl-1">
                      <div class="form-group has-error">
                            <input required placeholder="Nome" name="nome" value="{{ $funcionario->nome}}" type="text" class="form-control input-sm">
                       </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group has-error">
                        <input type="date" name="data_admissao" class="form-control" value="{{ $funcionario->data_admissao}}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                     <div class="form-group has-error">
                        <input required type="text" name="telefone" class="form-control" placeholder="Telefone" value="{{ $funcionario->telefone}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 prl-1">
                      <div class="form-group has-error">
                        <input required type="email" name="email" class="form-control" placeholder="email" value="{{ $funcionario->email}}">
                      </div>
                    </div>
                  </div>
                  </div>
                <div class="pull-right">
                        <button class="btn btn-primary">
                            {{  isset($funcionario) ? 'ATUALIZAR' : 'SALVAR' }}</button>
                </div>
                </form>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
@stop

