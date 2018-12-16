@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Clientes 
                </div>
                <div class="card-body">
                    <h5 class="card-title">Cadastro</h5>
                    <form action="{{route('clientes.index.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="nome">Endereço de email</label>
                            <input type="text" name="nome" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Seu nome">
                        </div>
                        <div class="form-group">
                            <label for="cnpj">Senha</label>
                            <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="cnpj">
                        </div>
                        <input type="hidden" name="user_id" value="1" />
                        <button type="submit" class="btn btn-primary">Gravar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Clientes 
                </div>
                <div class="card-body">
                    <h5 class="card-title">Listagem</h5>
                    <table class="table table-bordered">
                        <thead>
                        <th>Nome</th>
                        <th>CNPJ</th>
                        <th>Excluir</th>
                        </thead>
                        <tbody>
                            @forelse($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->cnpj}}</td>
                                <td>
                                    <form method="post" action="{{route('clientes.index.destroy', $cliente->id)}}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="hidden" name="id" value="{{$cliente->id}}"/>
                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2">Não há registros</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endsection
