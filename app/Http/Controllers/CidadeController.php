<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cidade;
use App\Models\Estado;

class CidadeController extends Controller
{
    public function index(){
        $cidades = Cidade::join('estado', 'cidade.estado', '=', 'estado.id')->select('cidade.*', 'estado.nome');

        return view('cidade.index', ['lista' => $cidades]);
    }

    public function novo_cidade(){

        $estados = Estado::all()->toArray();

        return view('Cidade.novo_cidade', ['lista' => $estados]);
    }

    public function salvar_novo(Request $dados){
        $cidade = new Cidade;
        $cidade -> nome = $dados -> input('nome');
        $cidade -> estado = $dados -> input('estado');
        $cidade -> save();

        return redirect('/cidade');
    }

}
