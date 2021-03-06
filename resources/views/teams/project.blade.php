@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Equipe: {{ $projeto->titulo }}</h1>
    <div class="row user-nav">
        <a class="btn btn-small btn-primary" href="{{ URL::to('teams/create/' . $projeto->id) }}">Novo membro</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
                    <form action="/teams/{{ $usuario->id }}" method="POST">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input class="btn btn-small btn-danger" type="submit" name="name" value="Apagar">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop