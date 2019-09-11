<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEvenementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('evenement', function(Blueprint $table)
		{
			$table->foreign('categorie_id', 'FK_B26681EBCF5E72D')->references('id')->on('categorie_evenement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('evenement', function(Blueprint $table)
		{
			$table->dropForeign('FK_B26681EBCF5E72D');
		});
	}

}
