<?php namespace App\Http\Controllers;
use App\User;
use App\TipoUsuario;
class UserController extends Controller{

    public function getIndex(){
    	$result = User::find(1)->tipoUsuario->perfil;
    	dd($result);
        return $result;
    }
}