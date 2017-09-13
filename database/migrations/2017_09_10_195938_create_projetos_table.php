<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjetosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projetos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('titulo', 40)->nullable();
			$table->text('descricao')->nullable();
			$table->date('dt_inicio')->nullable();
			$table->date('dt_fim')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projetos');
	}

}
