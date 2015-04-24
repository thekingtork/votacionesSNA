<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lider;
use App\Votante;
use Input;
use App\Http\Requests\CreateLiderRequest;
use App\Http\Requests\EditLiderRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class LiderController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$datos = Lider::all();
		return view('admin.lideres.index', compact('datos')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.lideres.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateLiderRequest $request)
	{
		$user = new Lider($request->all());
		$user->save();
		return redirect()->route('administrador.lideres.index');
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
		$user = Lider::findOrFail($id);
		return view('admin.lideres.edit',compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditLiderRequest $request,$id)
	{
		$user = Lider::findOrFail($id);
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
		if($id == 1 )
			return redirect()->back();

		$user = Lider::findOrFail($id);
		$votantes = $user->votantes;
		
		foreach ($votantes as $key => $value) 
		{
			$v = Votante::find($value->id);
			$v->lider_id = 1;
			$v->save();
		}
		$user->delete();
		return redirect()->back();

	}

}
