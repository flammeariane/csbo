<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvenementUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evenement_user', function(Blueprint $table)
		{
			$table->integer('evenement_id')->index('IDX_2EC0B3C4FD02F13');
			$table->integer('user_id')->index('IDX_2EC0B3C4A76ED395');
			$table->primary(['evenement_id','user_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evenement_user');
	}

}
