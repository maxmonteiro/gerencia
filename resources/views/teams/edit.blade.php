@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Atualizar requisito</h1>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <form role="form" action="{{ URL::to('teams/' . $teams->id) }}" method="POST">
                <div class="form-group float-label-control">
                    <label for="">Nome</label>
                    <input type="text" name="name" value="{{ $teams->name }}" class="form-control" placeholder="">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Email</label>
                    <input type="text" name="email" value="{{ $teams->email }}" class="form-control" placeholder="">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ method_field('PUT') }}
                <button type="submit" class="btn btn-small btn-primary">Salvar</button>
                <a class="btn btn-small btn-default" href="{{ URL::to('teams/project/' . $teams->proj_id) }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@stop