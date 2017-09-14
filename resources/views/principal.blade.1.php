<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('projetos') }}">Gerência</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('projetos') }}">Projetos</a></li>
                    <li><a href="{{ URL::to('projetos/create') }}">Novo Projeto</a>
                </ul>
            </nav>

            @yield('conteudo')

        </div>
    </body>
</html>