<?php namespace Cat\Http\Controllers\Pet;

use Cat\Http\Requests;
use Cat\Http\Controllers\Controller;
use Cat\PetRelations;
use Cat\User;
use Illuminate\Http\Request;
use Auth;
use Config;
use Response;

class PetController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pets = PetRelations::Where('owner_id', '=', Auth::id())->orderBy('pet_type')->get();
		// return Auth::getRecallerName();
		// return $pets[0]->pet_type_name;
		// $cat = Cat::find($id);
    	return view('pets.index')->with('pets', $pets);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$pet = PetRelations::find($id);
		if ($pet->owner_id !== Auth::id() && !$pet->is_public) {
		 	return Response::view('errors/403', array(), 403);
		}
		// return PetRelations::find($id);
		// print_r(Config::get('db_const.DB_PET_STATUS_VALUE')[1]);
		if ($pet->owner_id === Auth::id()) {
			$pet->owner_name = Auth::user()->name;
		} else {
			$pet_owner = User::find($pet->owner_id);
			if ($pet_owner->is_public) {
				$pet->owner_name = $pet_owner->name;
			} else {
				$pet->owner_name = 'Secret';
			}
		}
		$pet->status_value = Config::get('db_const.DB_PET_STATUS_VALUE')[$pet->status];
		return view('pets/show')->with('pet', $pet);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
