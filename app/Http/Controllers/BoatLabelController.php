<?php

namespace App\Http\Controllers;

use App\BoatLabel;
use Illuminate\Http\Request;

class BoatLabelController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$boatLabels = BoatLabel::all();
		return response()->json($boatLabels);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$boatLabel = BoatLabel::where('slug', $slug)->first();
		return response()->json($boatLabel);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$boatLabel = BoatLabel::create($request->all());
		return response()->json($boatLabel);
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
		$boatLabel = BoatLabel::where('slug', $slug)->first();
		$boatLabel->fill($request->all());
		return response()->json($boatLabel);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug)
	{
		$boatLabel = BoatLabel::where('slug', $slug)->first();
		$boatLabel->delete();
		return response()->json('boatLabel deleted');
	}
}
