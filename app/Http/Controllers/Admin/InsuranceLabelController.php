<?php

namespace App\Http\Controllers\Admin;

use App\InsuranceLabel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InsuranceLabelController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$insuranceLabels = InsuranceLabel::all();
		return response()->success($insuranceLabels);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$insuranceLabel = InsuranceLabel::where('slug', $slug)->first();
		return response()->success($insuranceLabel);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$insuranceLabel = InsuranceLabel::create($request->all());
		return response()->success($insuranceLabel);
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
		$insuranceLabel = InsuranceLabel::where('slug', $slug)->first();
		$insuranceLabel->fill($request->all());
		$insuranceLabel->save();
		return response()->success($insuranceLabel);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug)
	{
		$insuranceLabel = InsuranceLabel::where('slug', $slug)->first();
		$insuranceLabel->delete();
		return response()->success('insuranceLabel deleted');
	}
}
