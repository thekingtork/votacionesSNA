<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VotantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votantes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('cedula');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('sexo');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->boolean('sufrago')->default(false);
            $table->integer('lider_id')->unsigned();
            $table->foreign('lider_id')->references('id')->on('lideres');
            $table->integer('puestos_votacion_id')->unsigned();
            $table->foreign('puestos_votacion_id')->references('id')->on('puestos_votacion');
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
		Schema::drop('votantes');
	}

}
