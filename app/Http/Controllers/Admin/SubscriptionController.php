<?php

namespace App\Http\Controllers\Admin;

use App\MembershipOrigin;
use App\SubscriptionStatus;
use Illuminate\Http\Request;
use App\User;
use App\Subscription;
use App\Http\Controllers\Controller;

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
		$subscription = $user->subscriptions()
			->with('origin')
			->with('status')
			->with('products')
			->with('invoice')
			->get();
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
		$user = User::where('slug', $slug)->first();
		$origin = MembershipOrigin::find($request->input('origin_id'));
		$status = SubscriptionStatus::find($request->input('status_id'));
		$subscription = new Subscription($request->all());

		$subscription->origin()->associate($origin);
		$subscription->status()->associate($status);
		$subscription->user()->associate($user);
		$subscription->save();
		//$subscription = $user->subscriptions()->create($request->all());
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
		$user = User::where('slug', $slug)->first();
		$origin = MembershipOrigin::findOrFail($request->input('origin_id'));
		$status = SubscriptionStatus::findOrFail($request->input('status_id'));
		$subscription = Subscription::findOrFail($id);
		$subscription->fill($request->all());

		$subscription->origin()->associate($origin);
		$subscription->status()->associate($status);
		$subscription->user()->associate($user);
		$subscription->save();
		return response()->json($subscription);
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
		$subscription = Subscription::findOrFail($id);
		$subscription->delete();
		return response()->json('subscription deleted');
	}
}
