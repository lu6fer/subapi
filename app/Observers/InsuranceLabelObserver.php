<?php

namespace App\Observers;

use App\InsuranceLabel;
use Illuminate\Support\Str;

class InsuranceLabelObserver
{
	/**
	 * Listen to the Article saving event.
	 *
	 * @param  InsuranceLabel $insurance
	 * @return void
	 */
	public function saving(InsuranceLabel $insurance)
	{
		$insurance->slug = Str::slug($insurance->name);
	}
}