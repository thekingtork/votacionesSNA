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
        /*
        $faker = Faker::create();
        for ( $i = 0; $i < 30; $i++ ) {
           $identif = \DB::table('puestos_votacion')->insertGetId(array(
                'nombre'=> $faker->unique()->company,
                'numero_de_mesa' => $faker->randomDigitNotNull
            ));
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
