@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Atualizar requisito</h1>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <form role="form" action="{{ URL::to('requisitos/' . $requisitos->id) }}" method="POST">
                <div class="form-group float-label-control">
                    <label for="">Ref</label>
                    <input type="text" name="ref" value="{{ $requisitos->ref }}" class="form-control" placeholder="">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Título</label>
                    <input type="text" name="titulo" value="{{ $requisitos->titulo }}" class="form-control" placeholder="">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Projeto</label>
                    <input type="text" name="projeto" value="{{ $requisitos->projeto_id }}" class="form-control" placeholder="">
                </div>
                <div class="form-group col-sm-4">
                    <label for="">Prioridade:</label>
                    <select name="prioridade" value="{{ $requisitos->prioridade }}" class="form-control" id="sel1">
                    @if ($requisitos->prioridade == 'Alta')
                        <option selected>Alta</option>
                        <option>Média</option>
                        <option>Baixa</option>
                    @elseif ($requisitos->prioridade == 'Média')
                        <option>Alta</option>
                        <option selected>Média</option>
                        <option>Baixa</option>
                    @else                       
                        <option>Alta</option>
                        <option>Média</option>
                        <option selected>Baixa</option>
                    @endif
                    </select>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ method_field('PUT') }}
                <button type="submit" class="btn btn-small btn-primary">Salvar</button>
                <a class="btn btn-small btn-default" href="{{ URL::to('requisitos') }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@stop