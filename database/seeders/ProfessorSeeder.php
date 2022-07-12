<?php

namespace Database\Seeders;

use App\Models\Professor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professor::create([
            'nome' => 'Professor 1',
            'email' => 'professor@email.com',
            'senha' => bcrypt('123456')
        ]);
    }
}
