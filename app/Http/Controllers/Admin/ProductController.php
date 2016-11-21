<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::whereNull('parent_product')
	        ->get();
	    return response()->json($products);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$product = Product::where('slug', $slug)
			->with('children')
			->get();
		return response()->json($product);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    // 1st level product
	    if (empty($request->input('parent_product'))) {
		    $product = Product::create($request->all());
	    }
	    // Child product
	    else {
		    $parent = Product::findOrFail($request->input('parent_product'));
		    if (!empty($parent)) {
			    $product = $parent->children()->create($request->all());
		    }
	    }
	    return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
	    $product = Product::where('slug', $slug)->first();
	    $product->fill($request->all());
	    $product->save();
	    return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
	    $product = Product::where('slug', $slug)->first();
	    $product->delete();
	    return response()->json('product deleted');
    }
}
