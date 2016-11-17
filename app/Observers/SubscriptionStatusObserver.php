<?php

namespace App\Observers;

use App\SubscriptionStatus;
use Illuminate\Support\Str;

class SubscriptionStatusObserver
{
	/**
	 * Listen to the Article saving event.
	 *
	 * @param  SubscriptionStatus $subscription
	 * @return void
	 */
	public function saving(SubscriptionStatus $subscription)
	{
		$subscription->slug = Str::slug($subscription->name);
	}
}