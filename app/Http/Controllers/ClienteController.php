<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all()->toArray();

        return view('cliente.index', ['lista' => $clientes]);
    }

    public function novo_cliente(){
        return view('cliente.novo_cliente');
    }

    public function salvar_novo(Request $dados){
        $cliente = new Cliente;
        $cliente -> nome = $dados -> input('nome');
        $cliente -> cpf_cnpj = $dados -> input('cpf_cnpj');
        $cliente -> email = $dados -> input('email');
        $cliente -> save();

        return redirect('/cliente');
    }

    public function editar_cliente($id){
        $cliente = Cliente::find($id)->toArray();
        return view('cliente.editar', ['cliente' => $cliente]);
    }

    public function salvar_alteracao(Request $dados){
        $id = $dados -> input('id');

        $cliente = Cliente::find($id);
        $cliente -> nome = $dados -> input('nome');
        $cliente -> cpf_cnpj = $dados -> input('cpf_cnpj');
        $cliente -> email = $dados -> input('email');
        $cliente -> save();

        return redirect('/cliente');
    }

    public function excluir_cliente($id){
        $cliente = Cliente::find($id);
        $cliente -> delete();

        return redirect('/cliente');
    }
}
