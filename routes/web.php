<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CidadeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quemsomos', function() {

    $nome = 'Kauã Eliézer Pepe';

    return view('quemsomos', 
    [
        'nome_completo' => $nome
    ]);
});

Route::get('/contact', function(){
    return view('contato');
});

Route::group(['prefix' => 'produto'], function(){            
    Route::get('/', [ProdutoController::class, 'index']);
    Route::get('/novo_produto',
        [ProdutoController::class, 'novo_produto']
    );
    Route::post('salvar_novo', 
        [ProdutoController::class, 'salvar_novo']);
    Route::get('/excluir/{id}',
        [ProdutoController::class, 'excluir']);
    Route::get('/editar/{id}', 
        [ProdutoController::class, 'editar']);
    Route::post('salvar_alteracao', 
        [ProdutoController::class, 'salvar_alteracao']);
    Route::get('/pesquisa', 
        [ProdutoController::class, 'pesquisa']);
});

Route::group(['prefix' => 'cliente'], function(){
    Route::get('/', [ClienteController::class, 'index']);
    Route::get('/novo_cliente', [ClienteController::class, 'novo_cliente']);
    Route::post('salvar_novo', [ClienteController::class, 'salvar_novo']);
    Route::get('/editar/{id}', [ClienteController::class, 'editar_cliente']);
    Route::post('salvar_alteracao', [ClienteController::class, 'salvar_alteracao']);
    Route::get('/excluir/{id}', [ClienteController::class, 'excluir_cliente']);
    });

Route::group(['prefix' => 'cidade'], function(){
    Route::get('/', [CidadeController::class, 'index']);
    Route::get('/novo_cidade', [CidadeController::class, 'novo_cidade']);
    Route::post('salvar_novo', [CidadeController::class, 'salvar_novo']);
    });
//});
//Route::get('/products/{nome}', function($nome){
//
//    return view('produtos/produtos', 
//    [
//       'nome_item' => $nome
//    ]);
//});

Route::get('/categories', function(){
    return view('categorias/categorias');

});