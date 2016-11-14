<?php

namespace App\Observers;

use App\BoatLabel;
use Illuminate\Support\Str;

class BoatLabelObserver
{
	/**
	 * Listen to the Article saving event.
	 *
	 * @param  BoatLabel $boatLabel
	 * @return void
	 */
	public function saving(BoatLabel $boatLabel)
	{
		$boatLabel->slug = Str::slug($boatLabel->name);
	}
}