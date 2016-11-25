<?php

namespace App\Observers;

use App\Product;
use Illuminate\Support\Str;

class ProductObserver
{
	/**
	 * Listen to the Product validating event.
	 *
	 * @param  Product $product
	 * @return void
	 */
	public function validating(Product $product)
	{
		$product->slug = Str::slug($product->name);
	}
	/**
	 * Listen to the Product saving event.
	 *
	 * @param  Product $product
	 * @return void
	 */
	public function saving(Product $product)
	{
		$product->slug = Str::slug($product->name);
	}
}