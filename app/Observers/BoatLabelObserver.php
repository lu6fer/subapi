<?php

namespace App\Observers;

use App\BoatLabel;
use Illuminate\Support\Str;

class BoatLabelObserver
{
	/**
	 * Listen to the BoatLabel validating event.
	 *
	 * @param  BoatLabel $boatLabel
	 * @return void
	 */
	public function validating(BoatLabel $boatLabel)
	{
		$boatLabel->slug = Str::slug($boatLabel->name);
	}

	/**
	 * Listen to the BoatLabel saving event.
	 *
	 * @param  BoatLabel $boatLabel
	 * @return void
	 */
	public function saving(BoatLabel $boatLabel)
	{
		$boatLabel->slug = Str::slug($boatLabel->name);
	}
}