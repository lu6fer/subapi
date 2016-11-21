<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\TivLevel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TivLevelController extends Controller
{
	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$user = User::where('slug', $slug)->first();
		$tiv = $user->tiv()
			->get();
		return response()->json($tiv);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request, $slug)
	{
		$user = User::where('slug', $slug)->first();
		$tivLevel = new TivLevel($request->all());
		$tivLevel->user()->associate($user);
		$tivLevel->save();
		return response()->json($tivLevel);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  string $slug
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $slug, $id)
	{
		$user = User::where('slug', $slug)->first();
		$tivLevel = TivLevel::find($id);
		$tivLevel->fill($request->all());
		$tivLevel->user()->associate($user);
		$tivLevel->save();
		return response()->json($tivLevel);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string $slug
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug, $id)
	{
		$tivLevel = TivLevel::find($id);
		$tivLevel->delete();
		return response()->json('tivLevel deleted');
	}
}
