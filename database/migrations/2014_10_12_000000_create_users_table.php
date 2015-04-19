<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('primer_nombre');
			$table->string('segundo_nombre');
			$table->string('primer_apellido');
			$table->string('segundo_apellido');
			$table->string('telefono');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->integer('tipo_usuarios_id')->unsigned();
			$table->foreign('tipo_usuarios_id')->references('id')->on('tipo_usuarios');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
