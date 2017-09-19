<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/dashboard-style.css') }}" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-primary navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fa d-inline fa-lg fa-500px"></i><b>  Ez Project</b></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                <a class="btn navbar-btn btn-primary ml-2 text-white"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Usuário</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="nav-side-menu">
                    <div class="brand"></div>
                    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                    <div class="menu-list">
                        <ul id="menu-content" class="menu-content collapse out">
                            <!--
                            <li>
                                <a href="{{ URL::to('dashboard') }}">
                                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                                </a>
                            </li>
                            -->
                            <li data-toggle="collapse" data-target="#projeto" class="collapsed">
                                <a href="#"><i class="fa fa-folder fa-lg"></i> Projetos <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="projeto">
                                <li><a href="{{ URL::to('projetos') }}">Listar projetos</a></li>
                                <li><a href="{{ URL::to('requisitos') }}">Requisitos</a></li>
                            </ul>
                            <li data-toggle="collapse" data-target="#tarefa" class="collapsed">
                                <a href="{{ URL::to('tarefas') }}"><i class="fa fa-list fa-lg"></i> Tarefas</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('usuarios') }}">
                                    <i class="fa fa-users fa-lg"></i> Usuários
                                </a>
                            </li>
                            <!--
                            <li data-toggle="collapse" data-target="#administrativo" class="collapsed">
                                <a href="{{ URL::to('painel') }}"><i class="fa fa-cog fa-lg"></i> Administrativo</a>
                            </li>
                            -->
                        </ul>
                    </div>
                </div>
            </div>

            @yield('conteudo')

        </div>
    </div>

    <!-- jquery -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/userSearch.js') }}"></script>

</body>
</html>