<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreatePuestoRequest;
use App\Http\Requests\EditPuestoRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Puesto;
use Input;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class PuestoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$datos = Puesto::all();
		return view('admin.puestos.index', compact('datos')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.puestos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePuestoRequest $request)
	{
		$user = new Puesto($request->all());
		$user->save();
		return redirect()->route('administrador.puestos.index');
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
		$user = Puesto::findOrFail($id);
		return view('admin.puestos.edit',compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function ajax_edit($id)
	{
		$user = Puesto::findOrFail($id);
		return view('admin.puestos.aja_edit',compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditPuestoRequest $request,$id)
	{
		$user = Puesto::findOrFail($id);
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
		$user = Puesto::findOrFail($id);
		$user->delete();
		return redirect()->back();

	}

}
