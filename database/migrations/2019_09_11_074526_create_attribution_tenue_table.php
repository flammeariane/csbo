<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttributionTenueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attribution_tenue', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable()->index('IDX_7E2B1439A76ED395');
			$table->integer('piece_tenue_id')->nullable()->index('IDX_7E2B143936F05628');
			$table->integer('taille_id')->nullable()->index('IDX_7E2B1439FF25611A');
			$table->integer('quantite');
			$table->dateTime('dateAttribution');
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
		Schema::drop('attribution_tenue');
	}

}
