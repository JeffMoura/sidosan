<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableAgendamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function(Blueprint $table) {
        $table->engine = 'InnoDB';


		    $table->increments('id');
		    $table->date('data');
		    $table->string('horario',06);
		    $table->integer('funcionario_id')->unsigned();
		    $table->integer('doador_id')->unsigned();

		    $table->foreign('funcionario_id')
		        ->references('id')->on('funcionarios')
		        ->onDelete('cascade');

		    $table->foreign('doador_id')
		        ->references('id')->on('doadores')
		        ->onDelete('cascade');

    });
}
}
