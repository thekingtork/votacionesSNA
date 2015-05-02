<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lider;
use App\Votante;
use Input;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class VotosController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('is_admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$datos = Votante::where("sufrago",'=',0)->get();
		return view('admin.votos.index', compact('datos'))->with('p','votos'); 
	}

	/**
	 * Modify the column "sufrago" in Votante model.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function votar($id)
	{
		$v = Votante::findOrFail($id);
		$v->sufrago = 1;
		$v->save();
		return redirect()->back();
	}

	/**
	 * 
	 *
	 * 
	 * @return Response
	 */
	public function reiniciar()
	{
		return view('admin.votos.reiniciar')->with('p','votos'); 
	}


	/**
	 * 
	 *
	 * 
	 * @return Response
	 */
	public function reiniciar_update()
	{
		$v = Votante::all();
		foreach ($v as $key => $value) {
			# code...
			$value->sufrago = 0;
			$value->save();
		}
		return redirect()->back();
	}


}
