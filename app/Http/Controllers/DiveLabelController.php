<?php

namespace App\Http\Controllers;

use App\DiveLabel;
use Illuminate\Http\Request;

class DiveLabelController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$diveLabels = DiveLabel::all();
		return response()->json($diveLabels);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$diveLabel = DiveLabel::where('slug', $slug)->first();
		return response()->json($diveLabel);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$diveLabel = DiveLabel::create($request->all());
		return response()->json($diveLabel);
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
		$diveLabel = DiveLabel::where('slug', $slug)->first();
		$diveLabel->fill($request->all());
		return response()->json($diveLabel);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug)
	{
		$diveLabel = DiveLabel::where('slug', $slug)->first();
		$diveLabel->delete();
		return response()->json('diveLabel deleted');
	}
}
