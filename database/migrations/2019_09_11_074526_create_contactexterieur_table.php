<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactexterieurTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contactexterieur', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('majpar_id')->index('IDX_9E21F4AB8FE4E6DA');
			$table->string('typeCE');
			$table->integer('linkId1')->nullable();
			$table->integer('linkId2')->nullable();
			$table->integer('seq')->nullable();
			$table->string('nom')->nullable();
			$table->string('prenom')->nullable();
			$table->string('tel')->nullable();
			$table->string('lien')->nullable();
			$table->dateTime('datemaj');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contactexterieur');
	}

}
