<?php

namespace App\Http\Controllers\Admin;

use App\DiveLabel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
		return response()->success($diveLabels);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$diveLabel = DiveLabel::where('slug', $slug)->first();
		return response()->success($diveLabel);
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
		return response()->success($diveLabel);
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
		$diveLabel->save();
		return response()->success($diveLabel);
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
		return response()->success('diveLabel deleted');
	}
}
