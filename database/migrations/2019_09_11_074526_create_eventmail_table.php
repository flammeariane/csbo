<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventmailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventmail', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('evenement_id')->index('IDX_ADB0DF5FFD02F13');
			$table->string('typeMail');
			$table->dateTime('dateEnvoi');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('eventmail');
	}

}
