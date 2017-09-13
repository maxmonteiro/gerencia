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
			$table->integer('etapa')->nullable()->comment('0 - ToDo
1 - Doing
2 - Done');
			$table->integer('prioridade')->nullable()->comment('0 - baixa
1 - media
2 - alta');
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
