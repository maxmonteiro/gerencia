@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Adicionar membro</h1>
    <h2>Equipe: {{ $projetos->titulo }}</h2>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <form role="form" action="/teams/store" method="POST">
                <div class="form-group float-label-control">
                    <label for="">Nome</label>
                    <input type="text" name="name" class="form-control" placeholder="">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="">
                </div>
                <input type="hidden" name="proj_id" value="{{ $projetos->id }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-small btn-primary">Salvar</button>
                <a class="btn btn-small btn-default" href="{{ URL::to('teams/project/' . $projetos->id) }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@stop