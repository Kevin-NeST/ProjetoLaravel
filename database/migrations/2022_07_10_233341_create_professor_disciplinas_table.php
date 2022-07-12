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
        Schema::create('professor_disciplinas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professor_id')->constrained('professors', 'id');
            $table->foreignId('disciplina_id')->constrained('disciplinas', 'id');
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
        Schema::dropIfExists('professor_disciplinas');
    }
};
