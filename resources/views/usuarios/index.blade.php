@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Usuários</h1>
    <div class="row user-nav">
        <a class="btn btn-small btn-primary" href="{{ URL::to('usuarios/create') }}">Novo usuário</a>
    </div>
    <!--<div class="input-group"> <span class="input-group-addon">Filtrar</span>
        <input id="filter" type="text" class="form-control" placeholder="Digite aqui...">
    </div>-->
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Cód.</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('usuarios/' . $usuario->id . '/edit') }}">Editar</a>
                    <form action="/usuarios/{{ $usuario->id }}" method="POST">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="btn btn-small btn-danger" type="submit" name="name" value="Apagar">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@stop
        