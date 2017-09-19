<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarefasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tarefas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descricao', 40)->nullable();
			$table->string('etapa')->nullable()->comment('Open - Doing - Done');
			$table->string('prioridade')->nullable()->comment('baixa - media - alta');
			$table->integer('ordem')->nullable()->comment('0 a 9');
			$table->text('comentario')->nullable();
			$table->date('dt_criacao')->nullable();
			$table->integer('projeto_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tarefas');
	}

}
