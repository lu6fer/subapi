<?php

namespace App\Http\Controllers;

use App\User;
use App\BoatLevel;
use Illuminate\Http\Request;

class BoatLevelController extends Controller
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
		return response()->json($user->boat);
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
		$user = User::where('slug', $slug);
		$boatLevel = $user->boat()->create($request->all());
		return response()->json($boatLevel);
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
		$user = User::where('slug', $slug);
		$boatLevel = BoatLevel::find($id);
		$boatLevel->fill($request->all());
		$user->boat()->save($boatLevel);
		return response()->json($boatLevel);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$boatLevel = BoatLevel::find($id);
		$boatLevel->delete();
		return response()->json('boatLevel deleted');
	}
}