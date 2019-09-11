<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiculeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicule', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('majpar_veh_id')->index('IDX_D0599D4B2AA5D89A');
			$table->string('typeVeh');
			$table->string('marqueVeh')->nullable();
			$table->string('modeleVeh')->nullable();
			$table->string('plaqueVeh');
			$table->boolean('activeVeh');
			$table->dateTime('datemajVeh');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehicule');
	}

}
