<?php

namespace App\Observers;

use App\DiveLabel;
use Illuminate\Support\Str;

class DiveLabelObserver
{
	/**
	 * Listen to the DiveLabel validating event.
	 *
	 * @param  DiveLabel $diveLabel
	 * @return void
	 */
	public function validating(DiveLabel $diveLabel)
	{
		$diveLabel->slug = Str::slug($diveLabel->name);
	}

	/**
	 * Listen to the DiveLabel saving event.
	 *
	 * @param  DiveLabel $diveLabel
	 * @return void
	 */
	public function saving(DiveLabel $diveLabel)
	{
		$diveLabel->slug = Str::slug($diveLabel->name);
	}
}