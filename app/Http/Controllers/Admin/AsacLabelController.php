<?php

namespace App\Http\Controllers\Admin;

use App\AsacLabel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsacLabelController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$asacLabels = AsacLabel::all();
		return response()->json($asacLabels);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$asacLabel = AsacLabel::where('slug', $slug)->first();
		return response()->json($asacLabel);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$asacLabel = AsacLabel::create($request->all());
		return response()->json($asacLabel);
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
		$asacLabel = AsacLabel::where('slug', $slug)->first();
		$asacLabel->fill($request->all());
		$asacLabel->save();
		return response()->json($asacLabel);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug)
	{
		$asacLabel = AsacLabel::where('slug', $slug)->first();
		$asacLabel->delete();
		return response()->json('aAsacLabel deleted');
	}
}
