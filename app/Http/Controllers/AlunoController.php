<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index() {
        return view('app.aluno.index');
    }

    public function listar() {
        $alunos = Aluno::all();
        return view('app.diretor.alunos.listar', compact('alunos'));
    }

    public function show(Aluno $aluno) {
        /* $aluno->alunoDisciplina()->attach(1); */
        $aluno->load('alunoDisciplina');
        dd($aluno);
        return $aluno->alunoDisciplina;

        
    }

    public function cadastrar() {
        return view('app.diretor.alunos.cadastrar');
    }

    public function create(Request $request) {
        $request->validate([
            'nome' => 'required|min:3|max:40', //nomes com no min 3 caracteres e max 40
            'email' => 'email|unique:alunos',
            'senha' => 'required|min:6',
            'matricula' => 'unique:alunos'
        ], 
        [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no máximo 40 caracteres',
            'email.email' => 'O email informado não é válido',
            'email.unique' => 'O email informado já está cadastrado',
            'senha.min' => 'A senha precisa ter no mínimo 6 caracteres',
            'matricula.unique' => 'Matricula já está em uso',
            'required' => 'O campo :attribute deve ser preenchido'
        ]);

        $ano = date('Y');
        $request['matricula'] = $ano . $request['matricula'];
        //dd($request['matricula']);

        Aluno::create($request->all());
        return redirect()->route('app.diretor.alunos.listar');
    }

    public function edit($id) {
        $aluno = Aluno::find($id);

        return view('app.diretor.alunos.edit', compact('aluno'));
    }

    public function update(Request $request, $id) {
        $aluno = Aluno::find($id);

        $data = $request->only('nome', 'email', 'matricula', 'senha');

        $aluno->update($data);

        return redirect()->route('app.diretor.alunos.listar');
    }

    public function delete($id) {
        $aluno = Aluno::find($id);
        $aluno->delete();

        return redirect()->route('app.diretor.alunos.listar');
    }

    public function teste() {
        $alunos = Aluno::find(12)->with('alunoDisciplina');
        dd($alunos);
        //$aluno = $alunos->toJson();
        return view('app.aluno.index', compact('alunos'));
    }
}
