<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Votante extends Model {

	protected $table = 'votantes';
	public $timestamps = false;
    protected $fillable = ["cedula", 'primer_nombre', 'segundo_nombre', 'primer_apellido','segundo_apellido','telefono','email','sexo','direccion','sufrago','lider_id','puestos_votacion_id','numero_mesa'];


	public function lider()
    {
        return $this->belongsTo('App\Lider');
    }

    public function puesto()
    {
        return $this->belongsTo('App\Puesto','puestos_votacion_id');
    }
    public function getFullName()
	{
		return $this->primer_nombre . ' ' . $this->primer_apellido;
	}

}
