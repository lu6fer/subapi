<?php

namespace App\Http\Controllers\Admin;

use App\InvoiceStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceStatusController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$invoiceStatuss = InvoiceStatus::all();
		return response()->success($invoiceStatuss);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$invoiceStatus = InvoiceStatus::where('slug', $slug)->first();
		return response()->success($invoiceStatus);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$invoiceStatus = InvoiceStatus::create($request->all());
		return response()->success($invoiceStatus);
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
		$invoiceStatus = InvoiceStatus::where('slug', $slug)->first();
		$invoiceStatus->fill($request->all());
		return response()->success($invoiceStatus);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug)
	{
		$invoiceStatus = InvoiceStatus::where('slug', $slug)->first();
		$invoiceStatus->delete();
		return response()->success('invoiceStatus deleted');
	}
}
