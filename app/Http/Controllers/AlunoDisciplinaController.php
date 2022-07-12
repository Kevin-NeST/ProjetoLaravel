<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoDisciplinaController extends Controller
{
    public function index() {
        $alunos = Aluno::all();
        print_r($alunos);
        dd($alunos);
    }
}
