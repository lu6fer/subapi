<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Subscription;

class SubscriptionController extends Controller
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
		$subscription = $user->subscriptions();
		return response()->json($subscription);
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
		$subscription = $user->subscriptions()->create($request->all());
		return response()->json($subscription);
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
		$subscription = Subscription::find($id);
		$subscription->fill($request->all());
		$user->subscriptions()->save($subscription);
		return response()->json($subscription);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$subscription = Subscription::find($id);
		$subscription->delete();
		return response()->json('subscription deleted');
	}
}
