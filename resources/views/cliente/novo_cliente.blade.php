@extends('layouts.main')

@section('title', 'Cadastro de Cliente')

@section('content')

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Cadastro de um novo Cliente</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/cliente/salvar_novo" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label>Nome Completo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o seu nome..." name="nome">
            </div>

            <div class="form-group">
                <label>CPF/CNPJ</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CPF ou CNPJ" name="cpf_cnpj">
            </div>

            <div class="form-group">
                <label>E-mail</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome@email.com.br" name="email">
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