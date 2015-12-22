<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instructores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('apellido');
			$table->double('numDoc');
			$table->enum('nivelAcademico',['Primaria','Bachiller','Tecnico','Tecnologico','Profesional']);
			$table->string('profesion');
			$table->string('telefono');
			$table->string('direccion');
			$table->string('email');
			
			
			
			$table->timestamps();
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
