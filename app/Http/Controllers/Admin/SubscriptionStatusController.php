<?php

namespace App\Http\Controllers\Admin;

use App\SubscriptionStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionStatusController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$subscriptionStatuss = SubscriptionStatus::all();
		return response()->success($subscriptionStatuss);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$subscriptionStatus = SubscriptionStatus::where('slug', $slug)->first();
		return response()->success($subscriptionStatus);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$subscriptionStatus = SubscriptionStatus::create($request->all());
		return response()->success($subscriptionStatus);
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
		$subscriptionStatus = SubscriptionStatus::where('slug', $slug)->first();
		$subscriptionStatus->fill($request->all());
		$subscriptionStatus->save();
		return response()->success($subscriptionStatus);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug)
	{
		$subscriptionStatus = SubscriptionStatus::where('slug', $slug)->first();
		$subscriptionStatus->delete();
		return response()->success('subscriptionStatus deleted');
	}
}
