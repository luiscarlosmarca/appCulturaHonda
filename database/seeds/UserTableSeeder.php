<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker; 
class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$faker->seed(40);
		for($i=0; $i<20; $i ++)
		{
			$id_aprendiz=\DB::table('aprendices')->insertGetId(array(
				
				'nombre'        	=> $faker->firstName,
				'apellido'      	=> $faker->lastName,
				'foto'				=> "foto.jpg",
				'FeNa'          	=> $faker->dateTimeBetween('-13 years', '-8 years')->format('Y-m-d'),
				'tipo_doc'      	=> $faker->randomElement(['Cedula','Tarjeta de  identidad','Contraseña','Registro civil','Pasaporte']),
				'num_doc'       	=> $faker->unique()->numberBetween($min = 100000000, $max = 900000000),
				'nivelAcademico'    => $faker->randomElement(['Basica Primaria','Bachiller','Tecnico','Tecnologico','Profesional','PostGrado']),
				'telefono'      	=> $faker->phoneNumber,

				'sisben'			=> true,
				'estracto'			=> 2
							
				));

				$id_instructor=\DB::table('instructores')->insertGetId(array(
				
				
				'nombre'        	=> $faker->firstName,
				'apellido'      	=> $faker->lastName,
				'num_doc'       	=> $faker->unique()->numberBetween($min = 100000000, $max = 900000000),
				'nivelAcademico'    => $faker->randomElement(['Basica Primaria','Bachiller','Tecnico','Tecnologico','Profesional','PostGrado']),
				'profesion'		    => $faker->title,
				'telefono'      	=> $faker->phoneNumber,
				'direccion'    		=> $faker->streetAddress,
				
				'email'  			=> $faker->unique()->email
				
				
				));

				$idclubes=\DB::table('cursos')->insertGetId(array(
				
				
				
				'nombre'        	=> $faker->company,
				'tema'   		    => $faker->randomElement(['Musica','Danza','Teatro','Deporte']),
				
				'descripcion'		=> $faker->paragraph(rand(2,5))
				'id_instructor'     => $id_instructor,
				
				'horario'           => $faker->randomElement(['Diurno','Nocturno','Fines de semana']),
				'activo'			=> true,
				'observaciones'		=> $faker->paragraph(rand(2,5))
				));
       }
                
$faker = Faker::create();
		$faker->seed(10);
		for($i=0; $i<10; $i ++)
		{
                DB::table('matriculas')->insert(array(
				
				'id_aprendiz' => $idjugadores,
				'id_instructor'    => $idclubes,
				'activo'	 => true,
				
				));
        }
             

		
	}

}
 