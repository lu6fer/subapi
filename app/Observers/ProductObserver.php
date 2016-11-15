<?php

namespace App\Observers;

use App\Product;
use Illuminate\Support\Str;

class ProductObserver
{
	/**
	 * Listen to the Article saving event.
	 *
	 * @param  Product $product
	 * @return void
	 */
	public function saving(Product $product)
	{
		$product->slug = Str::slug($product->name);
	}
}