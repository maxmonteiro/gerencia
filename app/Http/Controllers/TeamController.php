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
        // join da tabela de usuarios com a tabela das equipes
        // retorna os usuarios pertencentes ao mesmo projeto
        $usuarios = Usuario::join('users_projs','users.id','=', 'users_projs.user_id')
            ->where('proj_id', $id)->get();
        // retorna pra view os registros
        return view('teams.project')
            ->with('projeto', $projetos)
            ->with('teams', $teams)
            ->with('usuarios', $usuarios);
    }

    /**
     * Exibe o formulário de inclusão
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create($id) {
        // carregar a view do formulário
        // passando o id do projeto como parametro
        $projetos = Projeto::find($id);
        return view('teams.create')
            ->with('projetos', $projetos);
    }

    /**
     * Grava um dado recem criado, no banco.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // instanciando novo usuario
        $usuarios = new Usuario;
        // setando atributos
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = '123456';
        // salvando o objeto
        $usuarios->save();

        // instanciando nova equipe
        $teams = new Team;
        // setando atributos
        $teams->user_id = $usuarios->id;
        $teams->proj_id = $request->proj_id;
        $id = $request->proj_id;
        // salvando o objeto
        $teams->save();

        //redirecionando para
        //return redirect()->route('/teams/create/', [$id]);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
         /// selecionar o registro na tabela
         $teams = Team::find($id);
         // retorna para o formulario de edicao
         return view('teams.edit')
             ->with('teams', $teams);
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         // selecionar o registro na tabela
         $teams = Team::find($id);
         // excluir o registro
         $teams->delete();
         // redirecionar para a lista
         return redirect()->back();
         
     }
}
