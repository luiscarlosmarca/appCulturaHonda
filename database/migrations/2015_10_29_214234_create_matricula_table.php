<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matriculas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_aprendiz')->unsigned();
			$table->integer('id_curso')->unsigned();
			$table->boolean('activo',true);
			$table->timestamps();

			$table->foreign('id_aprendiz')
				  ->references('id')
				  ->on('aprendices')
				  ->onUpdate('CASCADE')
				  ->onDelete('NO ACTION');


		    $table->foreign('id_curso')
				  ->references('id')
				  ->on('cursos')
				  ->onUpdate('CASCADE')
				  ->onDelete('NO ACTION');
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
