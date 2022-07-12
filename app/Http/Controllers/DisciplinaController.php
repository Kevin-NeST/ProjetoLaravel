<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function listar() {
        $disciplinas = Disciplina::all();
        return view('app.diretor.disciplinas.listar', compact('disciplinas'));
    }

    public function cadastrar() {
        return view('app.diretor.disciplinas.cadastrar');
    }

    public function create(Request $request) {
        $request->validate([
            'nome' => 'required|min:3|max:50', //nomes com no min 3 caracteres e max 40
            'descricao' => 'required|min:5|max:100',
        ], 
        [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no máximo 50 caracteres',
            'descricao.min' => 'O campo descrição precisa ter no mínimo 5 caracteres',
            'descricao.max' => 'O campo descrição precisa ter no máximo 100 caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ]);

        Disciplina::create($request->all());
        return redirect()->route('app.diretor.disciplinas.listar');
    }

    public function edit($id) {
        $disciplina = Disciplina::find($id);

        return view('app.diretor.disciplinas.edit', compact('disciplina'));
    }

    public function update(Request $request, $id) {
        $disciplina = Disciplina::find($id);

        $data = $request->only('nome', 'descricao');

        $disciplina->update($data);

        return redirect()->route('app.diretor.disciplinas.listar');
    }

    public function delete($id) {
        $aluno = Disciplina::find($id);
        $aluno->delete();

        return redirect()->route('app.diretor.disciplinas.listar');
    }
}
