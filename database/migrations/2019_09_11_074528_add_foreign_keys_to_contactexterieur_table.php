<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContactexterieurTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contactexterieur', function(Blueprint $table)
		{
			$table->foreign('majpar_id', 'FK_9E21F4AB8FE4E6DA')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contactexterieur', function(Blueprint $table)
		{
			$table->dropForeign('FK_9E21F4AB8FE4E6DA');
		});
	}

}
