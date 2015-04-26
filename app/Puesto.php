<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model {

	protected $table = 'puestos_votacion';
	public $timestamps = false;
	protected $fillable = ['nombre','numero_de_mesa'];

	public function votantes()
    {
        return $this->hasMany('App\Votante','puestos_votacion_id');
    }
}
