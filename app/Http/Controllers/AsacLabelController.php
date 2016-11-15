<?php

namespace App\Http\Controllers;

use App\AsacLabel;
use Illuminate\Http\Request;

class AsacLabelController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$aAsacLabels = AsacLabel::all();
		return response()->json($aAsacLabels);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$aAsacLabel = AsacLabel::where('slug', $slug)->first();
		return response()->json($aAsacLabel);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$aAsacLabel = AsacLabel::create($request->all());
		return response()->json($aAsacLabel);
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
		$aAsacLabel = AsacLabel::where('slug', $slug)->first();
		$aAsacLabel->fill($request->all());
		return response()->json($aAsacLabel);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug)
	{
		$aAsacLabel = AsacLabel::where('slug', $slug)->first();
		$aAsacLabel->delete();
		return response()->json('aAsacLabel deleted');
	}
}
