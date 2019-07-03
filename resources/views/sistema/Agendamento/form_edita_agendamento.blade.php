@extends('layout.base')

@section('conteudo')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header"> <h5> <b>{{ isset($agendamento) ? 'Atualizar' : 'Cadastrar novo' }} </b>  Agendamento </h5></div>
              <div class="card-body">
                @if(isset($agendamento))
                    <form action="{{ route('agendamento.atualizar', $agendamento->id) }}" method="post">
                        {{ method_field('put"') }}
                @else
                <form action="{{ route('agendamento.salvar') }}" method="post">
                @endif
                {{ csrf_field() }}
                 <div class="row">
                        <div class="col-md-12 prl-1">
                            <div class="form-group has-error">
                                <input name="id" value="{{ $agendamento->id }}" type="hidden" class="form-control input-sm">
                            </div>
                        </div>
                </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group has-error">
                        <input type="date" name="data" class="form-control" value="{{ $agendamento->data ?? '' }}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                     <div class="form-group">
                         <select class="form-control" name="horario" id="horario">
                                <option {{ isset($agendamento) ? $agendamento->horario == 'Selecione' ? 'selected' : '' : '' }} value="Selecione">Selecione</option>
                                <option {{ isset($agendamento) ? $agendamento->horario == '08:00' ? 'selected' : '' : '' }} value="08:00">08:00</option>
                                <option {{ isset($agendamento) ? $agendamento->horario == '09:00' ? 'selected' : '' : '' }} value="09:00">09:00</option>
                                <option {{ isset($agendamento) ? $agendamento->horario == '10:00' ? 'selected' : '' : '' }} value="10:00">10:00</option>
                                <option {{ isset($agendamento) ? $agendamento->horario == '11:00' ? 'selected' : '' : '' }} value="11:00">11:00</option>
                                <option {{ isset($agendamento) ? $agendamento->horario == '12:00' ? 'selected' : '' : '' }} value="12:00">12:00</option>
                                <option {{ isset($agendamento) ? $agendamento->horario == '13:00' ? 'selected' : '' : '' }} value="13:00">13:00</option>
                                <option {{ isset($agendamento) ? $agendamento->horario == '14:00' ? 'selected' : '' : '' }} value="14:00">14:00</option>
                                <option {{ isset($agendamento) ? $agendamento->horario == '15:00' ? 'selected' : '' : '' }} value="15:00">15:00</option>
                                <option {{ isset($agendamento) ? $agendamento->horario == '16:00' ? 'selected' : '' : '' }} value="16:00">16:00</option>
                                <option {{ isset($agendamento) ? $agendamento->horario == '17:00' ? 'selected' : '' : '' }} value="17:00">17:00</option>

                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                         <select class="form-control" name="doador_id" id="doador">
                            @foreach ($doadores as $doador)

                                <option value="{{$doador->id}}" {{ ($doador->id == $agendamento->doador_id) ? 'selected' : '' }}> {{$doador->nome}} </option>

                            @endforeach
                         </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                        <div class="form-group">
                            <select class="form-control" name="funcionario_id" id="funcionario">
                               @foreach ($funcionarios as $funcionario)

                                   <option value="{{$funcionario->id}}"
                                     {{ ($funcionario->id == $agendamento->funcionario_id) ? 'selected' : ''}} "> {{$funcionario->nome}}
                                    </option>

                               @endforeach
                            </select>
                        </div>
                    </div>
                  </div>
                  </div>
                <div class="pull-right">
                        <button class="btn btn-primary">
                            {{  isset($agendamento) ? 'ATUALIZAR' : 'SALVAR' }}</button>
                </div>
                </form>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
@stop

