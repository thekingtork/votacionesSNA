<?php namespace App\Http\Controllers;
use App\User;
use App\TipoUsuario;
use Auth;
use Input;
class UserController extends Controller{

    public function getProfile()
    {
    	$data['user'] = Auth::user();
    	return view('profile.edit', $data);
    }

    public function postProfile()
    {
    	$data = Input::all();

    	$user = Auth::user();
    	$user->primer_nombre 	= $data['primer_nombre'];
    	$user->segundo_nombre 	= $data['segundo_nombre'];
    	$user->primer_apellido 	= $data['primer_apellido'];
    	$user->segundo_apellido 	= $data['segundo_apellido'];
    	$user->telefono 	= $data['telefono'];
    	$user->email 	= $data['email'];
    	$user->save();
    	return redirect()->back();
    }

    public function postChangepassword()
    {
    	return ;
    }
}