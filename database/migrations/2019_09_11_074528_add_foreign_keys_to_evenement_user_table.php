<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEvenementUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('evenement_user', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FK_2EC0B3C4A76ED395')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('evenement_id', 'FK_2EC0B3C4FD02F13')->references('id')->on('evenement')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('evenement_user', function(Blueprint $table)
		{
			$table->dropForeign('FK_2EC0B3C4A76ED395');
			$table->dropForeign('FK_2EC0B3C4FD02F13');
		});
	}

}
