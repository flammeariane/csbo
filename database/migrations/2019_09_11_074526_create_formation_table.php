<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('formation', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable()->index('IDX_404021BFA76ED395');
			$table->integer('type_id')->nullable()->index('IDX_404021BFC54C8C93');
			$table->string('nBrevet')->nullable();
			$table->dateTime('dateDebut');
			$table->dateTime('dateFin')->nullable();
			$table->text('commentaire')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('formation');
	}

}
