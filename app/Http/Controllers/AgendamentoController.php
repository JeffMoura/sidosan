<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doador;
use App\Funcionario;
use App\Agendamento;

class AgendamentoController extends Controller
{
    public function inserir(){
        $doador = Doador::all();
        $funcionario = Funcionario::all();
        return view('sistema.agendamento.form_agendamento')->with('doadores', $doador)->with('funcionarios', $funcionario);
    }

    public function listar(){
        $dados = Agendamento::all();
        $doador = Doador::all();
        $funcionario = Funcionario::all();
        return view('sistema.agendamento.agendamento')->with('agendamento', $dados)->with('doadores', $doador)->with('funcionarios', $funcionario);
    }

    public function editar($id){
        $edita = Agendamento::find($id);
        $doador = Doador::all();
        $funcionario = Funcionario::all();
        return view('sistema.agendamento.form_edita_agendamento')->with('agendamento', $edita)->with('doadores', $doador)->with('funcionarios', $funcionario);
    }

    public function excluir($id)
    {
        Agendamento::destroy($id);
        return redirect()->route('agendamento.listar');
    }

    public function salvar(Request $request){

        $data = $request->input('data');
        $horario = $request->input('horario');
        $doador_id = $request->input('doador_id');
        $funcionario_id= $request->input('funcionario_id');


        //inserindo os dados
        $agendamento = new Agendamento();
        $agendamento->data= $data;
        $agendamento->horario= $horario;
        $agendamento->doador_id= $doador_id;
        $agendamento->funcionario_id= $funcionario_id;


        $agendamento->save();

        \Session::flash('alerta', array(
            'class' =>  'success',
            'mensagem' => 'Agendamento Cadastrado com sucesso!'
        ));
        return redirect()->route('agendamento.listar');
    }

    public function atualizar(Request $request){
        Agendamento::find($request->id)->update($request->input());
        \Session::flash('alerta', array(
            'class' =>  'success',
            'mensagem' => 'Agendamento atualizado com sucesso!'
        ));

        return redirect()->route('agendamento.listar');
    }

}
