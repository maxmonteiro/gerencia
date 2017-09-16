<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequisitosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requisitos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('ref');
			$table->string('titulo', 40)->nullable();
			$table->text('descricao')->nullable();
			$table->string('prioridade')->nullable()->comment('baixa - media - alta');
			$table->integer('projeto_id')->nullable()->comment('codigo do projeto no qual pertence o requisito');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('requisitos');
	}

}
