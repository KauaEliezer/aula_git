@extends('layouts.main')

@section('title', 'Cadastro de Cidades')

@section('content')

<div class="card card-secondary">
    <div class="card-header">
        <h3 class="card-title">Cadastro de uma Nova Cidade</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/cidade/salvar_novo" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label>Nome Cidade</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite a Cidade" name="nome">
            </div>

            <div class="form-group">
                <label>Estado</label>
                <select class="form-control" name="estado">
                      <?php foreach ($lista as $linha) { ?>
                              <option value='{{$linha["id"]}}'>{{$linha["nome"]}}</option>
                      <?php  } ?>
                    </select>
            </div>
                  
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="/cidade">Voltar</a>
        </div>
    </form>
</div>
@endsection