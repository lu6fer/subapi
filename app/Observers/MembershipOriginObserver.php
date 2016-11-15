<?php

namespace App\Observers;

use App\MembershipOrigin;
use Illuminate\Support\Str;

class MembershipOriginObserver
{
	/**
	 * Listen to the Article saving event.
	 *
	 * @param  MembershipOrigin $membershipOrigin
	 * @return void
	 */
	public function saving(MembershipOrigin $membershipOrigin)
	{
		$membershipOrigin->slug = Str::slug($membershipOrigin->name);
	}
}