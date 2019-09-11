<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConnectionLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('connection_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username');
			$table->dateTime('login_dt');
			$table->string('user_agent')->nullable();
			$table->string('browser_name')->nullable();
			$table->string('browser_version')->nullable();
			$table->string('browser_osname')->nullable();
			$table->string('browser_osversion')->nullable();
			$table->string('browser_devicetype')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('connection_log');
	}

}
