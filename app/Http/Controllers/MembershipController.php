<?php

namespace App\Http\Controllers;

use App\AsacLabel;
use App\InsuranceLabel;
use App\MembershipOrigin;
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
		$user = User::where('slug', $slug)->first();
		$asac = AsacLabel::findOrFail($request->input('asac_id'));
		$origin = MembershipOrigin::findOrFail($request->input('origin_id'));
		$insurance = InsuranceLabel::findOrFail($request->input('insurance_id'));
		$membership = new Membership($request->all());

		$membership->user()->associate($user);
		$membership->asac()->associate($asac);
		$membership->origin()->associate($origin);
		$membership->insurance()->associate($insurance);
		$membership->save();
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
		$user = User::where('slug', $slug)->first();
		$asac = AsacLabel::findOrFail($request->input('asac_id'));
		$origin = MembershipOrigin::findOrFail($request->input('origin_id'));
		$insurance = InsuranceLabel::findOrFail($request->input('insurance_id'));
		$membership = Membership::findOrFail($id);
		$membership->fill($request->all());

		$membership->user()->associate($user);
		$membership->asac()->associate($asac);
		$membership->origin()->associate($origin);
		$membership->insurance()->associate($insurance);
		$membership->save();
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
