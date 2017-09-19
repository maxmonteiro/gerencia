@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Requisitos</h1>
    <div class="input-group"> <span class="input-group-addon">Filtrar</span>
        <input id="filter" type="text" class="form-control" placeholder="Digite aqui...">
    </div>
    <br>
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
                    <a class="btn btn-small btn-success" href="{{ URL::to('requisitos/' . $requisito->id) }}">Exibir</a>
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
        