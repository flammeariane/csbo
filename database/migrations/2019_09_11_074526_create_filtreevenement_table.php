<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFiltreevenementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filtreevenement', function(Blueprint $table)
		{
			$table->integer('userid');
			$table->string('typeFiltre');
			$table->string('categories')->nullable();
			$table->string('statuts')->nullable();
			$table->string('statuts_participation')->nullable();
			$table->string('period')->nullable();
			$table->integer('duration')->nullable();
			$table->dateTime('dateAfter')->nullable();
			$table->dateTime('dateBefore')->nullable();
			$table->boolean('apply');
			$table->boolean('hidebydefault');
			$table->boolean('hidehistoryinlist');
			$table->boolean('filteralsopotentialevents');
			$table->string('dispositifComplet', 1)->nullable();
			$table->string('evenementArchive', 1)->nullable();
			$table->primary(['userid','typeFiltre']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filtreevenement');
	}

}
