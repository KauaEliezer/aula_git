@extends('layouts.main')

@section('title', 'Clientes')

@section('content')

<!--
    <div class="form-group">
        <form method='get' action='/produto/pesquisa'>
            <input type="text" class="form-control" placeholder="Pesquisar..." name="valor"/>
            <input type="submit" class="btn btn-warning"/>
        </form>
    </div>
-->
    <div>
        <a href="/cliente/novo_cliente" class='btn btn-success'>
            Novo
        </a>
    </div>
    <table class="table table-hover text-nowrap">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>CPF/CNPJ</td>
            <td>E-mail</td>
        </thead>
        <tbody>
            <?php
                foreach($lista as $linha){

                    echo "<tr>" .  
                            "<td>" . $linha['id']. "</td>" .
                            "<td>" . $linha['nome']. "</td>" .
                            "<td>" . $linha['cpf_cnpj']. "</td>" .
                            "<td>" . $linha['email']. "</td>" .
                            "<td>
                                 
                            <a href='/cliente/editar/". $linha['id'] ."' class='btn btn-default'>
                                    <i class='fas fa-edit'></i>
                                    <span>Editar</span>
                                </span>

                                <a href='/cliente/excluir/". $linha['id'] ."' class='btn btn-danger'>
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