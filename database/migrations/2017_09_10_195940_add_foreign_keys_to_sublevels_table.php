<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSublevelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sublevels', function(Blueprint $table)
		{
			$table->foreign('level_id', 'fk_level')->references('id')->on('levels')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sublevels', function(Blueprint $table)
		{
			$table->dropForeign('fk_level');
		});
	}

}
