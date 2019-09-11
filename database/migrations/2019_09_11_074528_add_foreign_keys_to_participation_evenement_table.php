<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParticipationEvenementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('participation_evenement', function(Blueprint $table)
		{
			$table->foreign('majpar_pe_id', 'FK_65A146759C5095C4')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'FK_957AC9FDA76ED395')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('evenement_id', 'FK_957AC9FDFD02F13')->references('id')->on('evenement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('participation_evenement', function(Blueprint $table)
		{
			$table->dropForeign('FK_65A146759C5095C4');
			$table->dropForeign('FK_957AC9FDA76ED395');
			$table->dropForeign('FK_957AC9FDFD02F13');
		});
	}

}
