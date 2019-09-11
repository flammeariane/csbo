<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserPermisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_permis', function(Blueprint $table)
		{
			$table->integer('user_id')->index('IDX_726A8F6EA76ED395');
			$table->integer('permis_id')->index('IDX_726A8F6E3594A24E');
			$table->primary(['user_id','permis_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_permis');
	}

}
