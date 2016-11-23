<?php

namespace App\Observers;

use App\InsuranceLabel;
use Illuminate\Support\Str;

class InsuranceLabelObserver
{
	/**
	 * Listen to the InsuranceLabel validating event.
	 *
	 * @param  InsuranceLabel $insurance
	 * @return void
	 */
	public function validating(InsuranceLabel $insurance)
	{
		$insurance->slug = Str::slug($insurance->name);
	}

	/**
	 * Listen to the InsuranceLabel saving event.
	 *
	 * @param  InsuranceLabel $insurance
	 * @return void
	 */
	public function saving(InsuranceLabel $insurance)
	{
		$insurance->slug = Str::slug($insurance->name);
	}
}