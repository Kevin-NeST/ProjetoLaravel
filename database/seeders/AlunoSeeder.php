<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ano = date('Y');
        Aluno::create([
            'nome' => 'Kevin',
            'email' => 'kevin@email.com',
            'matricula' => $ano. '0001',
            'senha' => bcrypt('123456')
        ]);
    }
}
