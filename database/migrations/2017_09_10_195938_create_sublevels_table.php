<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSublevelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sublevels', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descricao', 20)->nullable();
			$table->string('cod', 10)->nullable();
			$table->integer('status')->nullable()->comment('0 - aberto
1 - em andamento
2 - fechado');
			$table->integer('level_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sublevels');
	}

}
