<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoDisciplina extends Model
{
    use HasFactory;

    protected $table = 'aluno_disciplinas';
    protected $fillable = ['aluno_id', 'disciplina_id', 'nota_bim_1', 'nota_bim_2'];
}
