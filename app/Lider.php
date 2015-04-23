<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lider extends Model {

	protected $table = 'lideres';
	public $timestamps = false;

	protected $fillable = ["cedula", 'primer_nombre', 'segundo_nombre', 'primer_apellido','segundo_apellido','telefono','email','sexo','sector'];

	public function getFullName()
	{
		return $this->primer_nombre . ' ' . $this->primer_apellido;
	}
}
