<?php

namespace App\Observers;

use App\SubscriptionStatus;
use Illuminate\Support\Str;

class SubscriptionStatusObserver
{
	/**
	 * Listen to the SubscriptionStatus validating event.
	 *
	 * @param  SubscriptionStatus $subscription
	 * @return void
	 */
	public function validating(SubscriptionStatus $subscription)
	{
		$subscription->slug = Str::slug($subscription->name);
	}

	/**
	 * Listen to the SubscriptionStatus saving event.
	 *
	 * @param  SubscriptionStatus $subscription
	 * @return void
	 */
	public function saving(SubscriptionStatus $subscription)
	{
		$subscription->slug = Str::slug($subscription->name);
	}
}