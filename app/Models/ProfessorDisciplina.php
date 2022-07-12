<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessorDisciplina extends Model
{
    use HasFactory;

    protected $table = 'professor_disciplinas';
    protected $fillable = ['professor_id', 'disciplina_id'];
}
