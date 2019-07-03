@extends('layout.base')

@section('conteudo')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header"> <h5> <b>{{ isset($doador) ? 'Atualizar' : 'Cadastrar novo' }} </b>  Doador </h5></div>
              <div class="card-body">
                @if(isset($doador))
                    <form action="{{ route('doador.atualizar', $doador->id) }}" method="post">
                        {{ method_field('put"') }}
                @else
                <form action="{{ route('doador.salvar') }}" method="post">
                @endif
                {{ csrf_field() }}
                  <div class="row">
                    <div class="col-md-12 prl-1">
                      <div class="form-group has-error">
                            <input required placeholder="Nome" name="nome" value="{{ $doador->nome ?? '' }}" type="text" class="form-control input-sm">
                       </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group has-error">
                        <input type="date" name="data_nascimento" class="form-control" value="{{ $doador->data_nascimento ?? '' }}">
                      </div>
                    </div>
                    <div class="col-md-4 prl-1">
                      <div class="form-group has-error">
                            <select class="form-control" name="tipo_sanguineo" id="tipo_sanguineo">
                                    <option {{ isset($doador) ? $doador->tipo_sanguineo == 'tipo_Sanguineo' ? 'selected' : '' : '' }} value="tipo_sanguineo">Tipo Sanguíneo</option>
                                    <option {{ isset($doador) ? $doador->tipo_sanguineo == 'O+' ? 'selected' : '' : '' }} value="O+">O +</option>
                                    <option {{ isset($doador) ? $doador->tipo_sanguineo == 'O-' ? 'selected' : '' : '' }} value="O-">O -</option>
                                    <option {{ isset($doador) ? $doador->tipo_sanguineo == 'A+' ? 'selected' : '' : '' }} value="A+">A +</option>
                                    <option {{ isset($doador) ? $doador->tipo_sanguineo == 'A-' ? 'selected' : '' : '' }} value="A-">A -</option>
                                    <option {{ isset($doador) ? $doador->tipo_sanguineo == 'B+' ? 'selected' : '' : '' }} value="B+">B +</option>
                                    <option {{ isset($doador) ? $doador->tipo_sanguineo == 'B-' ? 'selected' : '' : '' }} value="B-">B -</option>
                                    <option {{ isset($doador) ? $doador->tipo_sanguineo == 'AB+' ? 'selected' : '' : '' }} value="AB+">AB +</option>
                                    <option {{ isset($doador) ? $doador->tipo_sanguineo == 'AB-' ? 'selected' : '' : '' }} value="AB-">AB -</option>
                                </select>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                     <div class="form-group has-error">
                        <input required type="text" name="telefone" class="form-control" placeholder="Telefone" value="{{ $doador->telefone ?? '' }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group has-error">
                        <input required type="email" name="email" class="form-control" placeholder="email" value="{{ $doador->email ?? '' }}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group has-error">
                        <input required type="text" name="endereco" class="form-control" placeholder="Endereço" value="{{ $doador->endereco ?? '' }}">
                      </div>
                    </div>

                  </div>
                  </div>
                <div class="pull-right">
                        <button class="btn btn-primary">
                            {{  isset($doador) ? 'ATUALIZAR' : 'SALVAR' }}</button>
                </div>
                </form>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
@stop

