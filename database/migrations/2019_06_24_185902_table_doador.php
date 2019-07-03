<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableDoador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //TABELA DE CADASTRO DO DOADOR
       Schema::create('doadores', function(Blueprint $table) {
        $table->engine = 'InnoDB';

        $table->increments('id');
        $table->string('nome', 255)->nullable();
        $table->date('data_nascimento');
        $table->string('tipo_sanguineo')->nullable();
        $table->string('email', 100)->nullable();
        $table->string('telefone', 100)->nullable();
        $table->string('endereco', 255)->nullable();
    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doadores');
    }
}
