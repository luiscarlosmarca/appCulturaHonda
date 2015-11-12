<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aprendices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('apellido');
			$table->string('foto');
			$table->date('FeNa')->nullable();
			$table->enum('tipoDoc',['Tarjeta de identidad','Registro civil','Cedula']);
			$table->double('numDoc');
			$table->enum('nivelAcademico',['Primaria','Bachiller','Tecnico','Tecnologico']);
			$table->string('telefono');
			
			$table->boolean('sisben');
			$table->char('estracto',2);
			
			
			
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
