<?php

namespace App\Observers;

use App\Invoice;
use App\InvoiceStatus;
use App\Subscription;
use Webpatser\Uuid\Uuid;

class SubscriptionObserver
{
	/**
	 * Listen to the Subscription created event.
	 *
	 * @param  Subscription $subscription
	 * @return void
	 */
	public function created(Subscription $subscription)
	{
		$status = InvoiceStatus::where('slug', 'in-progress')->first();
		$data = [
			'invoice_number' => Uuid::generate(4),
		];

		$invoice = new Invoice($data);
		$invoice->invoice_status()->associate($status);
		$invoice->subscription()->associate($subscription);
		$invoice->save();
	}

	public function deleting(Subscription $subscription) {
		$subscription->invoice()->delete();
	}
}