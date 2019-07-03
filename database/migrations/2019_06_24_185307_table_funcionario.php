<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //TABELA DE CADASTRO DE FUNCIONÁRIO
       Schema::create('funcionarios', function(Blueprint $table) {
        $table->engine = 'InnoDB';

        $table->increments('id');
        $table->string('nome', 255)->nullable();
        $table->date('data_admissao');
        $table->string('telefone', 100)->nullable();
        $table->string('email', 100)->nullable();

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funcionario');
    }
}
