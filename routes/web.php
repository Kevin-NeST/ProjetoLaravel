<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AlunoDisciplinaController;
use App\Http\Controllers\DiretorController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProfessorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/aluno/{id}', [AlunoController::class, 'show'])->name('app.aluno.index');
Route::get('/professor', [ProfessorController::class, 'index'])->name('app.professor.index');


Route::prefix('/diretor')->group(
    function() {
        Route::get('/menu', [DiretorController::class, 'index'])->name('app.diretor.index');

        Route::get('/alunos', [AlunoController::class, 'listar'])->name('app.diretor.alunos.listar');
        Route::get('/alunos/cadastrar', [AlunoController::class, 'cadastrar'])->name('app.diretor.alunos.cadastrar');
        Route::post('/alunos/cadastrar', [AlunoController::class, 'create'])->name('app.diretor.alunos.create');
        Route::get('/alunos/{id}/edit', [AlunoController::class, 'edit'])->name('app.diretor.alunos.edit');
        Route::put('/alunos/{id}', [AlunoController::class, 'update'])->name('app.diretor.alunos.update');
        Route::delete('/alunos/delete/{id}', [AlunoController::class, 'delete'])->name('app.diretor.alunos.delete');

        Route::get('/professores', [ProfessorController::class, 'listar'])->name('app.diretor.professores.listar');
        Route::get('/professores/cadastrar', [ProfessorController::class, 'cadastrar'])->name('app.diretor.professores.cadastrar');
        Route::post('/professores/cadastrar', [ProfessorController::class, 'create'])->name('app.diretor.professores.create');
        Route::get('/professores/{id}/edit', [ProfessorController::class, 'edit'])->name('app.diretor.professores.edit');
        Route::put('/professores/{id}', [ProfessorController::class, 'update'])->name('app.diretor.professores.update');
        Route::delete('/professores/delete/{id}', [ProfessorController::class, 'delete'])->name('app.diretor.professores.delete');

        Route::get('/disciplinas', [DisciplinaController::class, 'listar'])->name('app.diretor.disciplinas.listar');
        Route::get('/disciplinas/cadastrar', [DisciplinaController::class, 'cadastrar'])->name('app.diretor.disciplinas.cadastrar');
        Route::post('/disciplinas/cadastrar', [DisciplinaController::class, 'create'])->name('app.diretor.disciplinas.create');
        Route::get('/disciplinas/{id}/edit', [DisciplinaController::class, 'edit'])->name('app.diretor.disciplinas.edit');
        Route::put('/disciplinas/{id}', [DisciplinaController::class, 'update'])->name('app.diretor.disciplinas.update');
        Route::delete('/disciplinas/delete/{id}', [DisciplinaController::class, 'delete'])->name('app.diretor.disciplinas.delete');
    }
);
