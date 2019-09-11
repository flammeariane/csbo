<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEventmailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('eventmail', function(Blueprint $table)
		{
			$table->foreign('evenement_id', 'FK_ADB0DF5FFD02F13')->references('id')->on('evenement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('eventmail', function(Blueprint $table)
		{
			$table->dropForeign('FK_ADB0DF5FFD02F13');
		});
	}

}
