<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TipoUsuariosTableSeeder extends Seeder {

    public function run()
    {
        $id = \DB::table('tipo_usuarios')->insertGetId(array(
            'perfil' => 'administrador'
        ));
        \DB::table('tipo_usuarios')->insert(array(
            'perfil' => 'lider'
        ));
        \DB::table('tipo_usuarios')->insert(array(
            'perfil' => 'votante'
        ));
        \DB::table('tipo_usuarios')->insert(array(
            'perfil' => 'super-administrador'
        ));

        \DB::table('users')->insert(array(
            'tipo_usuario_id'=> $id,
            'primer_nombre' => 'Victor',
            'segundo_nombre' => 'Eliecer',
            'primer_apellido' => 'Puello',
            'segundo_apellido' => 'Gonzalez',
            'telefono' => '3116981491',
            'email'=> 'victor.puello@gmail.com',
            'password'=> \Hash::make('tork2010'),
        ));

        \DB::table('lideres')->insert(array(
                'cedula'=> "11111111",
                'primer_nombre' => "Lider",
                'segundo_nombre'=> "",
                'primer_apellido' => "General",
                'segundo_apellido'=> "",
                'sexo'=> 'masculino',
                'telefono' => "",
                'email'=> "lidergeneral@mail.com",
                'sector' => ""
            ));
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Col.dolores Garrido De Gonzal', 
                'numero_de_mesa' => '8'
            )); 
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Col.nacionalizado Marceliano ',
                'numero_de_mesa' =>  '39'
            )); 
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Colegio 24 De Mayo',
                'numero_de_mesa'=>  '22'
            )); 
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Cuero Curtido',
                'numero_de_mesa'=>   '2'
            )); 
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Los Venados Campanito',
                'numero_de_mesa'=>  '5'
            )); 
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Manguelito',
                'numero_de_mesa'=>  '5'
            )); 
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Martinez',
                'numero_de_mesa'=>    '12'
            ));
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Mateo Gomez',
                'numero_de_mesa'=>'11'
            ));
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Nueva Sede Escuela Del Prado',
                'numero_de_mesa'=>    '15'
            ));
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Rabolargo',
                'numero_de_mesa'=>  '9'
            ));
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Retiro De Los Indios',
                'numero_de_mesa'=>   '12'
            ));
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Severa',
                'numero_de_mesa'=>  '5'
            ));
        \DB::table('puestos_votacion')->insertGetId(array(
                'nombre' => 'Tres Maria',
                'numero_de_mesa'=>  '2'
            ));

        /*$faker = Faker::create();

        for ( $i = 0; $i < 30; $i++ ) {
            $liderId = \DB::table('lideres')->insertGetId(array(
                'cedula'=> $faker->randomNumber($nbDigits = NULL),
                'primer_nombre' => $faker->firstName,
                'segundo_nombre'=> $faker ->firstName,
                'primer_apellido' => $faker->lastName,
                'segundo_apellido'=> $faker->lastName,
                'sexo'=> 'masculino',
                'telefono' => $faker->randomDigitNotNull,
                'email'=> $faker->unique()->email,
                'sector' => $faker->streetAddress
            ));
            for ( $j = 0; $j < 4; $j++ ) {
                \DB::table('votantes')->insert(array(
                    'cedula'=> $faker->randomNumber($nbDigits = NULL),
                    'primer_nombre' => $faker->firstName,
                    'segundo_nombre'=> $faker ->firstName,
                    'primer_apellido' => $faker->lastName,
                    'segundo_apellido'=> $faker->lastName,
                    'sexo'=> 'masculino',
                    'direccion' => $faker->streetAddress,
                    'telefono' => $faker->randomDigitNotNull,
                    'email'=> $faker->unique()->email,
                    //'sufrago'=> false,
                    'lider_id'=> $liderId,
                    'puestos_votacion_id' => $identif,
                ));
            }
        }
        */

    }
}
