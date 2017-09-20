@extends('principal')

@section('conteudo')

<div class="col-sm-8 col-sm-offset-1">
    <h1>Atualizar tarefa</h1>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <form role="form" action="{{ URL::to('tarefas/' . $tarefas->id) }}" method="POST">
            <div class="form-group float-label-control">
                    <label for="">Descrição</label>
                    <input type="text" name="descricao" value="{{ $tarefas->descricao }}" class="form-control" placeholder="">
                </div>
                <div class="form-group col-sm-4">
                <label for="">Etapa</label>
                    <select name="etapa" value="{{ $tarefas->etapa }}" class="form-control" id="sel1">
                    @if ($tarefas->etapa == 'open')
                        <option selected>open</option>
                        <option>doing</option>
                        <option>done</option>
                    @elseif ($tarefas->etapa == 'doing')
                        <option>open</option>
                        <option selected>doing</option>
                        <option>done</option>
                    @else                       
                        <option>open</option>
                        <option>doing</option>
                        <option selected>done</option>
                    @endif
                    </select>
                </div>
                <div class="form-group col-sm-4">
                <label for="">Prioridade:</label>
                    <select name="prioridade" value="{{ $tarefas->prioridade }}" class="form-control" id="sel1">
                        <option>alta</option>
                        <option>média</option>
                        <option>baixa</option>
                    </select>
                </div>
                <div class="form-group float-label-control col-sm-4">
                    <label for="">Ordem</label>
                    <input type="text" name="ordem" value="{{ $tarefas->ordem }}" class="form-control" placeholder="0 a 9">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Comentário</label>
                    <textarea name="comentario" class="form-control" placeholder="" rows="5">{{ $tarefas->comentario }}</textarea>
                </div>
                <div class="form-group form-date float-label-control">
                    <label for="">Data de criação</label>
                    <input type="date" name="dt_criacao" value="{{ $tarefas->dt_criacao }}" class="form-control" placeholder="">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Projeto</label>
                    <input type="text" name="projeto" value="{{ $tarefas->projeto_id }}" class="form-control" placeholder="">
                </div>
                
                
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ method_field('PUT') }}
                <button type="submit" class="btn btn-small btn-primary">Salvar</button>
                <a class="btn btn-small btn-default" href="{{ URL::to('tarefas/project/' . $tarefas->projeto_id) }}">Cancelar</a>
            </form>
        </div>
    </div>
</div>

@stop