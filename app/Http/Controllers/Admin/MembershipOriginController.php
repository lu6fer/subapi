<?php

namespace App\Http\Controllers\Admin;

use App\MembershipOrigin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembershipOriginController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$membershipOrigins = MembershipOrigin::all();
		return response()->json($membershipOrigins);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$membershipOrigin = MembershipOrigin::where('slug', $slug)->first();
		return response()->json($membershipOrigin);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$membershipOrigin = MembershipOrigin::create($request->all());
		return response()->json($membershipOrigin);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $slug)
	{
		$membershipOrigin = MembershipOrigin::where('slug', $slug)->first();
		$membershipOrigin->fill($request->all());
		$membershipOrigin->save();
		return response()->json($membershipOrigin);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug)
	{
		$membershipOrigin = MembershipOrigin::where('slug', $slug)->first();
		$membershipOrigin->delete();
		return response()->json('membershipOrigin deleted');
	}
}
