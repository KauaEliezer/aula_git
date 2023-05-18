@extends('layouts.main')

@section('title', 'Cidades')

@section('content')

    <div class="form-group">
        <form method='get' action='/cidade/pesquisa'>
            <input type="text" class="form-control" placeholder="Pesquisar..." name="valor"/>
            <input type="submit" class="btn btn-warning"/>
        </form>
    </div>

    <div>
        <a href="/cidade/novo_cidade" class='btn btn-success'>
            Novo
        </a>
    </div>
    <table class="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>estado</td>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha){

                    echo "<tr>" .  
                            "<td>" . $linha['id']. "</td>" .
                            "<td>" . $linha['nome']. "</td>" .
                            "<td>" . $linha['estado']. "</td>" .
                            "<td>
                                 
                                <a href='/cidade/editar/". $linha['id'] ."' class='btn btn-default'>
                                    <i class='fas fa-edit'></i>
                                    <span>Editar</span>
                                </span>

                                <a href='/cidade/excluir/". $linha['id'] ."' class='btn btn-danger'>
                                    <i class='fas fa-trash'></i>
                                    <span>Excluir</span>
                                </a>
                            </td>".
                        "</tr>";
                }
            ?>
        </tbody>
    </table>

@endsection