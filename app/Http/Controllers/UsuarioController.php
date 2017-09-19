<?php

namespace App\Http\Controllers;

use App\Usuario;
use View;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // pegar os projetos
        $usuarios = Usuario::orderBy('id', 'asc')->get();
        // carregar a view com os registros
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // carregar a view do formulário
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // instanciar um novo objeto
        $usuarios = new Usuario;
        // setar os campos
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = $request->password;
        // salvar o objeto
        $usuarios->save();
        // redirecionar para lista
        return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // selecionar o registro na tabela atraves do parametro id
        //$usuarios = Usuario::find($id);
        // carregar a view e passar o registro
        //return view('usuarios.show')
        //    ->with('usuarios', $usuarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // selecionar o registro na tabela
        $usuarios = Usuario::find($id);
        // retorna para o formulario de edicao
        return view('usuarios.edit')
            ->with('usuarios', $usuarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // selecionar o registro na tabela atraves do parametro id
        $usuarios = Usuario::find($id);
        // setar os campos
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = $request->password;
        // salvar o objeto
        $usuarios->save();
        // redirecionar para lista
        return redirect('usuarios');
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
        $usuarios = Usuario::find($id);
        // excluir o registro
        $usuarios->delete();
        // redirecionar para a lista
        return redirect('usuarios');
    }
}
