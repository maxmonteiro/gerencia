<?php

namespace App\Http\Controllers;

use App\Team;
use App\Projeto;
use App\Usuario;
use View;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // exibe a equipe de um projeto
    public function project($id)
    {
        $projetos = Projeto::find($id);
        $teams = Team::where('proj_id', $projetos->id)->get();
        $usuarios = Usuario::join('users_projs','users.id','=', 'users_projs.user_id')
            ->where('proj_id', $id)->get();

        return view('teams.project')
            ->with('projeto', $projetos)
            ->with('teams', $teams)
            ->with('usuarios', $usuarios);
    }

    public function create($id) {
        //
    }



}
