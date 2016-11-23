<?php

namespace App\Observers;

use App\InvoiceStatus;
use Illuminate\Support\Str;

class InvoiceStatusObserver
{
	/**
	 * Listen to the InvoiceStatus validating event.
	 *
	 * @param  InvoiceStatus $invoiceStatus
	 * @return void
	 */
	public function validating(InvoiceStatus $invoiceStatus)
	{
		$invoiceStatus->slug = Str::slug($invoiceStatus->name);
	}

	/**
	 * Listen to the InvoiceStatus saving event.
	 *
	 * @param  InvoiceStatus $invoiceStatus
	 * @return void
	 */
	public function saving(InvoiceStatus $invoiceStatus)
	{
		$invoiceStatus->slug = Str::slug($invoiceStatus->name);
	}
}