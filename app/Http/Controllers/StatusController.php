<?php

namespace App\Http\Controllers;

use DB;

class StatusController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		if (DB::connection()->getDatabaseName()) {
			return response()->success('Application is up and running');
		}
		return response()->error('Unable to connect to database', '404');
	}
}