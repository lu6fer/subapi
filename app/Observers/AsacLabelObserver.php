<?php

namespace App\Observers;

use App\AsacLabel;
use Illuminate\Support\Str;

class AsacLabelObserver
{
	/**
	 * Listen to the Article saving event.
	 *
	 * @param  AsacLabel $asac
	 * @return void
	 */
	public function saving(AsacLabel $asac)
	{
		$asac->slug = Str::slug($asac->name);
	}
}