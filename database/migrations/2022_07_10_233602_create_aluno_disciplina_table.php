<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_disciplinas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id')->constrained('alunos', 'id');
            $table->foreignId('disciplina_id')->constrained('disciplinas', 'id');
            $table->float('nota_bim_1')->nullable();
            $table->float('nota_bim_2')->nullable();

            /* 0 reprovado 1 aprovado */
            $table->boolean('resultado')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_disciplinas');
    }
};
