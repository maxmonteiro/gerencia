<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersProjsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_projs', function(Blueprint $table)
		{
			$table->foreign('proj_id', 'fk_project')->references('id')->on('projetos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'fk_user')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_projs', function(Blueprint $table)
		{
			$table->dropForeign('fk_project');
			$table->dropForeign('fk_user');
		});
	}

}
