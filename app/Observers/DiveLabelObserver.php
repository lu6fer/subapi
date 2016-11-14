<?php

namespace App\Observers;

use App\DiveLabel;
use Illuminate\Support\Str;

class DiveLabelObserver
{
	/**
	 * Listen to the Article saving event.
	 *
	 * @param  DiveLabel $diveLabel
	 * @return void
	 */
	public function saving(DiveLabel $diveLabel)
	{
		$diveLabel->slug = Str::slug($diveLabel->name);
	}
}