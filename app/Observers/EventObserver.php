<?php

namespace App\Observers;

use App\Event;
use Illuminate\Support\Str;

class EventObserver
{
	/**
	 * Listen to the Event validating event.
	 *
	 * @param  Event $event
	 * @return void
	 */
	public function validating(Event $event)
	{
		$event->slug = Str::slug($event->date->format('Y-m-d').' '.$event->title);
	}
	/**
	 * Listen to the Event saving event.
	 *
	 * @param  Event $event
	 * @return void
	 */
	public function saving(Event $event)
	{
		$event->slug = Str::slug($event->date->format('Y-m-d').' '.$event->title);
	}
}