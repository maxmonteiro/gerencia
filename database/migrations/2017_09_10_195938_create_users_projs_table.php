<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersProjsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_projs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('descricao', 40)->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('proj_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_projs');
	}

}
