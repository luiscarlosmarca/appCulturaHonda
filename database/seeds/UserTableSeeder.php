<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker; 
class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$faker->seed(15);
		for($i=0; $i<15; $i ++)
		{
			$aprendiz_id=\DB::table('aprendices')->insertGetId(array(
				
				'nombre'        	=> $faker->firstName,
				'apellido'      	=> $faker->lastName,
				'foto'				=> "foto.jpg",
				'FeNa'          	=> $faker->dateTimeBetween('-13 years', '-8 years')->format('Y-m-d'),
				'tipoDoc'      	=> $faker->randomElement(['Cedula','Tarjeta de  identidad','Contraseña','Registro civil','Pasaporte']),
				'numDoc'       	=> $faker->unique()->numberBetween($min = 100000000, $max = 900000000),
				'nivelAcademico'    => $faker->randomElement(['Basica Primaria','Bachiller','Tecnico','Tecnologico','Profesional','PostGrado']),
				'telefono'      	=> $faker->phoneNumber,

				'sisben'			=> true,
				'estracto'			=> 2
							
				));

				$instructor_id=\DB::table('instructores')->insertGetId(array(
				
				
				'nombre'        	=> $faker->firstName,
				'apellido'      	=> $faker->lastName,
				'numDoc'       	=> $faker->unique()->numberBetween($min = 100000000, $max = 900000000),
				'nivelAcademico'    => $faker->randomElement(['Basica Primaria','Bachiller','Tecnico','Tecnologico','Profesional','PostGrado']),
				'profesion'		    => $faker->title,
				'telefono'      	=> $faker->phoneNumber,
				'direccion'    		=> $faker->streetAddress,
				
				'email'  			=> $faker->unique()->email
				
				
				));

				$idcurso=\DB::table('cursos')->insertGetId(array(
				
				
				
				'nombre'        	=> $faker->company,
				'tema'   		    => $faker->randomElement(['Musica','Danza','Teatro','Deporte']),
				
				'descripcion'		=> $faker->paragraph(rand(2,5)),
				'instructor_id'     => $instructor_id,
				
				'horario'           => $faker->randomElement(['Diurno','Nocturno','Fines de semana']),
				'activo'			=> true,
				'observaciones'		=> $faker->paragraph(rand(2,5))
				
				));
       

				
	            DB::table('matriculas')->insert(array(
					
					'aprendiz_id' => $aprendiz_id,
					'curso_id'    => $idcurso,
					'activo'	 => true,
					
			    ));
        		
          

       }
                
   

		
	}

}
 