<?php

namespace App\Http\Controllers;

use App\InsuranceLabel;
use Illuminate\Http\Request;

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
		return response()->json($insuranceLabels);
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
		return response()->json($insuranceLabel);
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
		return response()->json($insuranceLabel);
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
		return response()->json($insuranceLabel);
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
		return response()->json('insuranceLabel deleted');
	}
}
