<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCsboparmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('csboparms', function(Blueprint $table)
		{
			$table->string('parmName')->primary();
			$table->string('valueString')->nullable();
			$table->integer('valueInt')->nullable();
			$table->boolean('valueBool')->nullable();
			$table->dateTime('valueDate')->nullable();
			$table->dateTime('updateDate')->nullable();
			$table->string('updatedBy')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('csboparms');
	}

}
