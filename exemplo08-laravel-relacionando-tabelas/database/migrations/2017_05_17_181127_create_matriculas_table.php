<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            
            $table->increments('id');
            
            // O TIPO 'increments' É UM TIPO INTEIRO QUE SÓ TEM VALORES 
            // POSITIVOS. PARA QUE UM RELACIONAMENTO SEJA POSSÍVEL, OS TIPOS DOS 
            // CAMPOS RELACIONADOS PRECISAM SER IGUAIS. COMO ESSES CAMPOS NÃO 
            // DEVEM SER AUTO INCREMENTÁVEIS NA TABELA 'matriculas', O TIPO DEVE
            // SER DEFINIDO COMO inteiro não sinalizado, OU SEJA, SEM SINAL.
            // APENAS POSITIVO.
            $table->integer('aluno_id')->unsigned();
            $table->integer('disciplina_id')->unsigned();
            
            $table->string('semestre');
            $table->timestamps();
            
            // DEFININDO AS RESTRIÇÕES DE CHAVE ESTRANGEIRA.
            $table->foreign('aluno_id')
                ->references('id')->on('alunos')
                ->onDelete('cascade');
            $table->foreign('disciplina_id')
                ->references('id')->on('disciplinas')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
}
