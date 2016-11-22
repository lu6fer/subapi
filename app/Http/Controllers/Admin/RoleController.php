<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$roles = Role::all();
		return response()->success($roles);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$role = Role::where('slug', $slug)
			->with('users')
			->first();
		return response()->success($role);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$role = Role::create($request->all());
		return response()->success($role);
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
		$role = Role::where('slug', $slug)->first();
		$role->fill($request->all());
		$role->save();
		return response()->success($role);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug)
	{
		$role = Role::where('slug', $slug)->first();
		$role->delete();
		return response()->success('role deleted');
	}
}
