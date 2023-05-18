@extends('layouts.main')

@section('title', 'Edição de Cliente')

@section('content')

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Edição do Cliente de Código {{ $cliente["id"] }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/cliente/salvar_alteracao" method="POST">
        <input type="hidden" name="id" value="{{ $cliente['id'] }}">
        <div class="card-body">

            <div class="form-group">
                <label>Nome Completo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" 
                       placeholder="Placa de vídeo" name="nome" value='{{ $cliente["nome"] }}'>
            </div>

            <div class="form-group">
                <label>CPF/CNPJ</label>
                <input type="text" class="form-control" id="exampleInputEmail1"
                       placeholder="1800.50" name="cpf_cnpj" value='{{ $cliente["cpf_cnpj"] }}'>
            </div>

            <div class="form-group">
                <label>E-mail</label>
                <input type="text" class="form-control" id="exampleInputEmail1" 
                       placeholder="20" name="email" value='{{ $cliente["email"] }}'>
            </div>
                  
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/cliente">Voltar</a>
        </div>
    </form>
</div>
@endsection