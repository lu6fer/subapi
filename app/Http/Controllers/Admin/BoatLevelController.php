<?php

namespace App\Http\Controllers\Admin;

use App\BoatLabel;
use App\User;
use App\BoatLevel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
		$boat = $user->boat()
			->with('label')
			->get();
		return response()->success($boat);
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
		$label = BoatLabel::findOrFail($request->input('level'));
		$boatLevel = new BoatLevel($request->all());
		$boatLevel->user()->associate($user);
		$boatLevel->label()->associate($label);
		$boatLevel->save();
		return response()->success($boatLevel);
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
		$label = BoatLabel::findOrFail($request->input('level'));
		$boatLevel = BoatLevel::find($id);
		$boatLevel->fill($request->all());
		$boatLevel->label()->associate($label);
		$boatLevel->user()->associate($user);
		$boatLevel->save();
		return response()->success($boatLevel);
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
		$boatLevel = BoatLevel::find($id);
		$boatLevel->delete();
		return response()->success('boatLevel deleted');
	}
}
