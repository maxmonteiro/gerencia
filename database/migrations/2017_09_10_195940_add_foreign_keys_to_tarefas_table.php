<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTarefasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tarefas', function(Blueprint $table)
		{
			$table->foreign('projeto_id', 'fk_projeto')->references('id')->on('projetos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tarefas', function(Blueprint $table)
		{
			$table->dropForeign('fk_projeto');
		});
	}

}
