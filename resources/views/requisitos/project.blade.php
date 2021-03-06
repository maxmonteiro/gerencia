@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Requisitos - {{ $projeto->titulo }}</h1>
    <div class="row user-nav">
        <!--<a class="btn btn-small btn-primary" href="{{ URL::to('requisitos/' . $projeto->id . '/create') }}">Novo requisito</a>-->
        <a class="btn btn-small btn-primary" href="{{ URL::to('requisitos/create') }}">Novo requisito</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>Id</td>
                <td>Ref.</td>
                <td>Título</td>
                <td>Prioridade</td>
                <td>Projeto</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
        @foreach($requisitos as $requisito)
            <tr>
                <td>{{ $requisito->id }}</td>
                <td>{{ $requisito->ref }}</td>
                <td>{{ $requisito->titulo }}</td>
                <td>{{ $requisito->prioridade }}</td>
                <td>{{ $requisito->projeto_id }}</td>
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('requisitos/' . $requisito->id . '/edit') }}">Editar</a>
                    <form action="/requisitos/{{ $requisito->id }}" method="POST">
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