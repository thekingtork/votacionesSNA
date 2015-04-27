<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateVotanteRequest;
use App\Http\Requests\EditVotanteRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lider;
use App\Puesto;
use App\Votante;
use Input;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class VotanteController extends Controller {
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
		$datos = Votante::all();
		return view('admin.votantes.index', compact('datos')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data['lideres'] = Lider::all();
		$data['puestos'] = Puesto::all();

		foreach ($data['lideres'] as $key => $value) {
			$data['lideres'][$key]->name = $value->getFullName();
		}

		return view('admin.votantes.create', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateVotanteRequest $request)
	{
		$user = new Votante($request->all());
		$user->save();
		return redirect()->route('administrador.votantes.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = Votante::findOrFail($id);
		$data['lideres'] = Lider::all();
		$data['puestos'] = Puesto::all();

		foreach ($data['lideres'] as $key => $value) {
			$data['lideres'][$key]->name = $value->getFullName();
		}

		return view('admin.votantes.edit',compact('user'))->with('lideres',$data['lideres'])->with('puestos',$data['puestos']);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditVotanteRequest $request,$id)
	{
		$user = Votante::findOrFail($id);
		$user->fill($request->all());
		$user->save();
		return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = Votante::findOrFail($id);
		$user->delete();
		return redirect()->back();

	}

}
