@extends('layouts.main')

@section('title', 'Edição de Produto')

@section('content')

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Edição do Produto de Código {{ $produto["id"] }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/produto/salvar_alteracao" method="POST">
        <input type="hidden" name="id" value="{{ $produto['id'] }}">
        <div class="card-body">

            <div class="form-group">
                <label>Descrição do Produto</label>
                <input type="text" class="form-control" id="exampleInputEmail1" 
                       placeholder="Placa de vídeo" name="nome" value='{{ $produto["nome"] }}'>
            </div>

            <div class="form-group">
                <label>Preço de Venda do Produto</label>
                <input type="text" class="form-control" id="exampleInputEmail1"
                       placeholder="1800.50" name="preco" value='{{ $produto["preco"] }}'>
            </div>

            <div class="form-group">
                <label>Estoque do Produto</label>
                <input type="text" class="form-control" id="exampleInputEmail1" 
                       placeholder="20" name="quantidade" value='{{ $produto["quantidade"] }}'>
            </div>

            <div class="form-group">
                <label>Peso do Produto (kg)</label>
                <input type="text" class="form-control" id="exampleInputEmail1" 
                       placeholder="250" name="peso" value='{{ $produto["peso"] }}'>
            </div>
                  
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/produto">Voltar</a>
        </div>
    </form>
</div>
@endsection