<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model {

	protected $table = 'tipo_usuarios';
	public $timestamps = false;

	public function user()
    {
        return $this->hasMany('App\User');
    }
}
