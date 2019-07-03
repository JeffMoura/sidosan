<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionarioController extends Controller
{
    public function inserir(){
        return view('sistema.funcionario.form_funcionario');
    }

    public function listar(){
        $dados = Funcionario::all();
        return view('sistema.funcionario.funcionario')->with('funcionario', $dados);
    }

    public function editar($id){
        $edita = Funcionario::find($id);
        return view('sistema.funcionario.form_editafuncionario')->with('funcionario', $edita);
    }

    public function excluir($id)
    {
        Funcionario::destroy($id);
        return redirect()->route('funcionario.listar');
    }

    public function salvar(Request $request){

        $nome = $request->input('nome');
        $data_admissao = $request->input('data_admissao');
        $telefone = $request->input('telefone');
        $email = $request->input('email');


        //inserindo os dados
        $funcionario = new Funcionario();
        $funcionario->nome = $nome;
        $funcionario->data_admissao= $data_admissao;
        $funcionario->telefone= $telefone;
        $funcionario->email= $email;


        $funcionario->save();

        \Session::flash('alerta', array(
            'class' =>  'success',
            'mensagem' => 'Funcionário Cadastrado com sucesso!'
        ));
        return redirect()->route('funcionario.listar');
    }

    public function atualizar(Request $request){
        Funcionario::find($request->id)->update($request->input());
        \Session::flash('alerta', array(
            'class' =>  'success',
            'mensagem' => 'Funcionário atualizado com sucesso!'
        ));

        return redirect()->route('funcionario.listar');
    }
}
