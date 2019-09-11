<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipationEvenementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participation_evenement', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable()->index('IDX_65A14675A76ED395');
			$table->integer('evenement_id')->index('IDX_65A14675FD02F13');
			$table->string('statut')->default('Candidat');
			$table->text('commentaire')->nullable();
			$table->dateTime('datemaj');
			$table->string('majpar')->default('bibi');
			$table->integer('majpar_pe_id')->nullable()->index('IDX_65A146759C5095C4');
			$table->string('typePE')->default('U');
			$table->boolean('roleRD');
			$table->boolean('roleDriver');
			$table->string('vehicule_id')->nullable();
			$table->unique(['evenement_id','user_id'], 'ev_us_unc');
			$table->unique(['evenement_id','user_id','vehicule_id'], 'ev_us_ve_unc');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participation_evenement');
	}

}
