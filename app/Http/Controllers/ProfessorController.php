<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index () {
        return view('app.professor.index');
    }

    public function listar() {
        $professores = Professor::all();

        return view('app.diretor.professores.listar', compact('professores'));
    }

    public function cadastrar() {
        return view('app.diretor.professores.cadastrar');
    }

    public function create(Request $request) {
        $request->validate([
            'nome' => 'required|min:3|max:40', //nomes com no min 3 caracteres e max 40
            'email' => 'email|unique:professors',
            'senha' => 'required|min:6',
        ], 
        [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no máximo 40 caracteres',
            'email.email' => 'O email informado não é válido',
            'email.unique' => 'O email informado já está cadastrado',
            'senha.min' => 'A senha precisa ter no mínimo 6 caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ]);

        /* $ano = date('Y');
        $request['matricula'] = $ano . $request['matricula']; */
        //dd($request['matricula']);

        Professor::create($request->all());
        return redirect()->route('app.diretor.professores.listar');
    }

    public function edit($id) {
        $professor = Professor::find($id);

        return view('app.diretor.professores.edit', compact('professor'));
    }

    public function update(Request $request, $id) {
        $professor = Professor::find($id);

        $data = $request->only('nome', 'email', 'senha');

        $professor->update($data);

        return redirect()->route('app.diretor.professores.listar');
    }

    public function delete($id) {
        $professor = Professor::find($id);
        $professor->delete();

        return redirect()->route('app.diretor.professores.listar');
    }
}
