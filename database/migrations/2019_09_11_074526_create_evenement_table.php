<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvenementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evenement', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('categorie_id')->nullable()->index('IDX_B26681EBCF5E72D');
			$table->dateTime('dateDebut');
			$table->dateTime('dateFin');
			$table->string('titre');
			$table->string('lieu');
			$table->text('dispositifDemande');
			$table->integer('nbVolontaireDemande');
			$table->string('rendezVous');
			$table->boolean('substance');
			$table->text('remarque')->nullable();
			$table->boolean('dispositifComplet');
			$table->boolean('alert');
			$table->integer('nbVolontaireInscrit')->default(0);
			$table->string('statut')->default('Nouveau');
			$table->timestamp('dateCreation')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('dateUpdate')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('updatedBy')->default('bibi');
			$table->string('alertReason1')->nullable();
			$table->string('alertReason2')->nullable();
			$table->string('alertReason3')->nullable();
			$table->boolean('archived');
			$table->integer('nbVolontaireCandidat')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evenement');
	}

}
