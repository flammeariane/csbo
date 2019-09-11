<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSentmailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sentmail', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('context')->nullable();
			$table->string('contextType')->nullable();
			$table->integer('contextId')->nullable();
			$table->text('sentTo')->nullable();
			$table->text('sentCc')->nullable();
			$table->text('sentBcc')->nullable();
			$table->text('sentSubject')->nullable();
			$table->text('sentMessage')->nullable();
			$table->dateTime('sentDateTime')->nullable();
			$table->string('sentByUserName')->nullable();
			$table->string('sentFrom')->nullable();
			$table->integer('sentResult')->nullable();
			$table->string('sentFailures')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sentmail');
	}

}
