<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFormationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('formation', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FK_404021BFA76ED395')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('type_id', 'FK_404021BFC54C8C93')->references('id')->on('liste_formation')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('formation', function(Blueprint $table)
		{
			$table->dropForeign('FK_404021BFA76ED395');
			$table->dropForeign('FK_404021BFC54C8C93');
		});
	}

}
