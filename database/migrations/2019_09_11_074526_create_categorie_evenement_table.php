<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategorieEvenementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categorie_evenement', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nom');
			$table->text('description');
			$table->string('couleur', 7);
			$table->boolean('active')->default(0);
			$table->boolean('filtrable')->default(1);
			$table->boolean('checkHR')->default(1);
			$table->boolean('creationMail')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categorie_evenement');
	}

}
