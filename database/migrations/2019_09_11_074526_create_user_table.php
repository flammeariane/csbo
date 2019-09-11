<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username', 180);
			$table->string('username_canonical', 180)->unique('UNIQ_8D93D64992FC23A8');
			$table->string('email', 180);
			$table->string('email_canonical', 180)->unique('UNIQ_8D93D649A0D96FBF');
			$table->boolean('enabled');
			$table->string('salt')->nullable();
			$table->string('password');
			$table->dateTime('last_login')->nullable();
			$table->dateTime('last_activity')->nullable();
			$table->dateTime('last_logout')->nullable();
			$table->string('confirmation_token', 180)->nullable()->unique('UNIQ_8D93D649C05FB297');
			$table->dateTime('password_requested_at')->nullable();
			$table->array('roles');
			$table->string('nom')->nullable();
			$table->string('prenom')->nullable();
			$table->string('gsm')->nullable();
			$table->string('sexe', 1)->nullable();
			$table->dateTime('dateNaissance')->nullable();
			$table->string('adresse')->nullable();
			$table->integer('codePostal')->nullable();
			$table->dateTime('dateValidation')->nullable();
			$table->string('nRegistreNational', 11)->nullable();
			$table->string('nLegitimation', 15)->nullable();
			$table->dateTime('dateEntree')->nullable();
			$table->string('localite')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
