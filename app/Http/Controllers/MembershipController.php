<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Membership;

class MembershipController extends Controller
{
	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$user = User::where('slug', $slug)
			->first();
		$membership = $user->membership()
			->with('origin')
			->with('asac')
			->with('insurance')
			->get();
		return response()->json($membership);
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
		$membership = $user->membership()->create($request->all());
		return response()->json($membership);
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
		$membership = Membership::find($id);
		$membership->fill($request->all());
		$user->membership()->save($membership);
		return response()->json($membership);
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
		$membership = Membership::findOrFail($id);
		$membership->delete();
		return response()->json('membership deleted');
	}
}
