<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('date', '>', Carbon::now())
	        ->with('owner')
	        ->get();
        return response()->json($events);
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $event = Event::where('slug', $slug)
            ->with('owner')
            ->with('participants')
            ->first();
        return response()->json($event);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $owner = User::findOrFail($request->input('owner'));
	    $event = new Event($request->all());
	    $owner->organizer()->save($event);
	    return response()->json($event);
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
	    $owner = User::findOrFail($request->input('owner'));
	    $event = Event::where('slug', $slug)->first();
	    $event->fill($request->all());
	    $owner->organizer()->save($event);
	    return response()->json($event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $event->delete();
        return response()->json('event deleted');
    }
}
