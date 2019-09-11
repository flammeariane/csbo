<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserPermisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_permis', function(Blueprint $table)
		{
			$table->foreign('permis_id', 'FK_726A8F6E3594A24E')->references('id')->on('permis')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('user_id', 'FK_726A8F6EA76ED395')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_permis', function(Blueprint $table)
		{
			$table->dropForeign('FK_726A8F6E3594A24E');
			$table->dropForeign('FK_726A8F6EA76ED395');
		});
	}

}
