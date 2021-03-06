<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->enum('tema',['Musica','Danza','Teatro','Deporte']);
			$table->string('descripcion');
			$table->integer('instructor_id')->unsigned();
			$table->enum('horario',['Diurno','Nocturno','Fines de semana']);
			$table->boolean('activo')->default(true);
			$table->mediumText	('observaciones')->nullable();
			
			$table->timestamps();

			$table->foreign('instructor_id')
				  ->references('id')
				  ->on('instructores')
				  ->onUpdate('CASCADE')
				  ->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
