<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\DiveLevel;

class DiveLevelController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $user = User::where('slug', $slug)->first();
        return response()->json($user->boat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug)
    {
        $user = User::where('slug', $slug);
        $diveLevel = $user->boat()->create($request->all());
        return response()->json($diveLevel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug, $id)
    {
        $user = User::where('slug', $slug);
        $diveLevel = DiveLevel::find($id);
        $diveLevel->fill($request->all());
        $user->boat()->save($diveLevel);
        return response()->json($diveLevel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diveLevel = DiveLevel::find($id);
        $diveLevel->delete();
        return response()->json('diveLevel deleted');
    }
}