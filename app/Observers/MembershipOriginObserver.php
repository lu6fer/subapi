<?php

namespace App\Observers;

use App\MembershipOrigin;
use Illuminate\Support\Str;

class MembershipOriginObserver
{
	/**
	 * Listen to the MembershipOrigin validating event.
	 *
	 * @param  MembershipOrigin $membershipOrigin
	 * @return void
	 */
	public function validating(MembershipOrigin $membershipOrigin)
	{
		$membershipOrigin->slug = Str::slug($membershipOrigin->name);
	}

	/**
	 * Listen to the MembershipOrigin saving event.
	 *
	 * @param  MembershipOrigin $membershipOrigin
	 * @return void
	 */
	public function saving(MembershipOrigin $membershipOrigin)
	{
		$membershipOrigin->slug = Str::slug($membershipOrigin->name);
	}
}