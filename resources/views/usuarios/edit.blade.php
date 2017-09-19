@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
<h1>Atualizar usuário</h1>
<br>
<div class="row">
    <div class="col-sm-8">
        <form role="form" action="{{ URL::to('usuarios/' . $usuarios->id) }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group float-label-control">
                <label for="">Nome</label>
                <input type="text" name="name" value="{{ $usuarios->name }}" class="form-control" placeholder="">
            </div>
            <div class="form-group float-label-control">
                <label for="">Email</label>
                <input type="text" name="email" value="{{ $usuarios->email }}" class="form-control" placeholder="">
            </div>
            <div class="form-group float-label-control">
                <label for="">Senha</label>
                <input type="password" name="password" value="{{ $usuarios->password }}" class="form-control" placeholder="">
            </div>
            {{ method_field('PUT') }}
            <button type="submit" class="btn btn-small btn-primary">Salvar</button>
            <a class="btn btn-small btn-default" href="{{ URL::to('usuarios') }}">Cancelar</a>
        </form>
    </div>
</div>
</div>

@stop