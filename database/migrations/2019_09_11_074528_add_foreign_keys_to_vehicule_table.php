<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVehiculeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vehicule', function(Blueprint $table)
		{
			$table->foreign('majpar_veh_id', 'FK_D0599D4B2AA5D89A')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vehicule', function(Blueprint $table)
		{
			$table->dropForeign('FK_D0599D4B2AA5D89A');
		});
	}

}
