@extends('principal')

@section('conteudo')

            <h1>Projetos</h1>

            <!-- will be used to show any messages -->
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Cód.</td>
                        <td>Título</td>
                        <td>Início</td>
                        <td>Término</td>
                        <td>Ações</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($projetos as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->titulo }}</td>
                        <td>{{ Carbon\Carbon::parse($value->dt_inicio)->format('d/m/Y') }}</td>
                        <td>{{ Carbon\Carbon::parse($value->dt_fim)->format('d/m/Y') }}</td>

                        <!-- we will also add show, edit, and delete buttons -->
                        <td>

                            <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                            <!-- we will add this later since its a little more complicated than the other two buttons -->

                            <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                            <a class="btn btn-small btn-success" href="{{ URL::to('projetos/' . $value->id) }}">Exibir</a>

                            <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('projetos/' . $value->id . '/edit') }}">Editar</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

@stop
        