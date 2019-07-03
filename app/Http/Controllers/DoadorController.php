<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doador;

class DoadorController extends Controller
{
    public function principal(){
        return view('sistema.principal');
    }

    public function inserir(){
        return view('sistema.doador.form_doador');
    }

    public function listar(){
        $dados = Doador::all();
        return view('sistema.doador.doador')->with('doador', $dados);
    }

    public function editar($id){
        $edita = Doador::find($id);
        return view('sistema.doador.form_editadoador')->with('doador', $edita);
    }

    public function excluir($id)
    {
        Doador::destroy($id);
        return redirect()->route('doador.listar');
    }

    public function salvar(Request $request){

        $nome = $request->input('nome');
        $data_nascimento = $request->input('data_nascimento');
        $tipo_sanguineo = $request->input('tipo_sanguineo');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $endereco = $request->input('endereco');

        //inserindo os dados
        $doador = new Doador();
        $doador->nome = $nome;
        $doador->data_nascimento= $data_nascimento;
        $doador->tipo_sanguineo= $tipo_sanguineo;
        $doador->email= $email;
        $doador->telefone= $telefone;
        $doador->endereco= $endereco;
        $doador->save();

        \Session::flash('alerta', array(
            'class' =>  'success',
            'mensagem' => 'Doador Cadastrado com sucesso!'
        ));
        return redirect()->route('doador.listar');
    }

    public function atualizar(Request $request){
        Doador::find($request->id)->update($request->input());
        \Session::flash('alerta', array(
            'class' =>  'success',
            'mensagem' => 'Doador atualizado com sucesso!'
        ));

        return redirect()->route('doador.listar');
    }
}
