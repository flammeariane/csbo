<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAttributionTenueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('attribution_tenue', function(Blueprint $table)
		{
			$table->foreign('piece_tenue_id', 'FK_7E2B143936F05628')->references('id')->on('piece_tenue')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'FK_7E2B1439A76ED395')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('taille_id', 'FK_7E2B1439FF25611A')->references('id')->on('taille_tenue')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('attribution_tenue', function(Blueprint $table)
		{
			$table->dropForeign('FK_7E2B143936F05628');
			$table->dropForeign('FK_7E2B1439A76ED395');
			$table->dropForeign('FK_7E2B1439FF25611A');
		});
	}

}
