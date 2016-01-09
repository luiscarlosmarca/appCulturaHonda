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
			$table->integer('aprendiz_id')->unsigned();
			$table->integer('curso_id')->unsigned();
			$table->boolean('activo',true);
			$table->timestamps();

			$table->foreign('aprendiz_id')
				  ->references('id')
				  ->on('aprendices')
				  ->onUpdate('CASCADE')
				  ->onDelete('CASCADE');


		    $table->foreign('curso_id')
				  ->references('id')
				  ->on('cursos')
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
