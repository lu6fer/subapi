<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');*/

Route::group(['prefix' => '/v1'], function(){
	/*
	|--------------------------------------------------------------------------
	| Labels
	|--------------------------------------------------------------------------
	| Get labels
	|
	*/
	Route::group(['prefix' => 'labels'], function () {
		/**
		 * Asac label
		 */
		Route::get('asac', 'AsacLabelController@index');
		Route::get('asac/{slug}', 'AsacLabelController@show');
		Route::post('asac', 'AsacLabelController@store');
		Route::put('asac/{slug}', 'AsacLabelController@update');
		Route::delete('asac/{slug}', 'AsacLabelController@destroy');
		/**
		 * Boat label
		 */
		Route::get('boat', 'BoatLabelController@index');
		Route::get('boat/{slug}', 'BoatLabelController@show');
		Route::post('boat', 'BoatLabelController@store');
		Route::put('boat/{slug}', 'BoatLabelController@update');
		Route::delete('boat/{slug}', 'BoatLabelController@destroy');
		/**
		 * Dive label
		 */
		Route::get('dive', 'DiveLabelController@index');
		Route::get('dive/{slug}', 'DiveLabelController@show');
		Route::post('dive', 'DiveLabelController@store');
		Route::put('dive/{slug}', 'DiveLabelController@update');
		Route::delete('dive/{slug}', 'DiveLabelController@destroy');
		/**
		 * Invoice status
		 */
		Route::get('invoice', 'InvoiceStatusController@index');
		Route::get('invoice/{slug}', 'InvoiceStatusController@show');
		Route::post('invoice', 'InvoiceStatusController@store');
		Route::put('invoice/{slug}', 'InvoiceStatusController@update');
		Route::delete('invoice/{slug}', 'InvoiceStatusController@destroy');
		/**
		 * Insurance label
		 */
		Route::get('insurance', 'InsuranceLabelController@index');
		Route::get('insurance/{slug}', 'InsuranceLabelController@show');
		Route::post('insurance', 'InsuranceLabelController@store');
		Route::put('insurance/{slug}', 'InsuranceLabelController@update');
		Route::delete('insurance/{slug}', 'InsuranceLabelController@destroy');
		/**
		 * Membership origin
		 */
		Route::get('origin', 'MembershipOriginController@index');
		Route::get('origin/{slug}', 'MembershipOriginController@show');
		Route::post('origin', 'MembershipOriginController@store');
		Route::put('origin/{slug}', 'MembershipOriginController@update');
		Route::delete('origin/{slug}', 'MembershipOriginController@destroy');
		/**
		 * Subscription status
		 */
		Route::get('subscription', 'SubscriptionStatusController@index');
		Route::get('subscription/{slug}', 'SubscriptionStatusController@show');
		Route::post('subscription', 'SubscriptionStatusController@store');
		Route::put('subscription/{slug}', 'SubscriptionStatusController@update');
		Route::delete('subscription/{slug}', 'SubscriptionStatusController@destroy');
	});


	/**
	 * Articles
	 */
	Route::get('articles', 'ArticleController@index');
	Route::get('articles/{slug}', 'ArticleController@show');
	Route::post('articles', 'ArticleController@store');
	Route::put('articles/{slug}', 'ArticleController@update');
	Route::delete('articles/{slug}', 'ArticleController@destroy');
	// Comments
	Route::get('articles/{slug}/comments', 'CommentController@show');
	Route::post('articles/{slug}/comments', 'CommentController@store');
	Route::put('articles/{slug}/comments/{id}', 'CommentController@update');
	Route::delete('articles/{slug}/comments/{id}', 'CommentController@destroy');
	/**
	 * Users
	 */
	Route::get('users', 'UserController@index');
	Route::get('users/{slug}', 'UserController@show');
	Route::post('users', 'UserController@store');
	Route::put('users/{slug}', 'UserController@update');
	Route::delete('users/{slug}', 'UserController@destroy');
	// Boat level
	Route::get('users/{slug}/boat', 'BoatLevelController@show');
	Route::post('users/{slug}/boat', 'BoatLevelController@store');
	Route::put('users/{slug}/boat/{id}', 'BoatLevelController@update');
	Route::delete('users/{slug}/boat/{id}', 'BoatLevelController@destroy');
    // Dive level
    Route::get('users/{slug}/dive', 'DiveLevelController@show');
    Route::post('users/{slug}/dive', 'DiveLevelController@store');
    Route::put('users/{slug}/dive/{id}', 'DiveLevelController@update');
    Route::delete('users/{slug}/dive/{id}', 'DiveLevelController@destroy');
	// Membership
	Route::get('users/{slug}/membership', 'MembershipController@show');
	Route::post('users/{slug}/membership', 'MembershipController@store');
	Route::put('users/{slug}/membership/{id}', 'MembershipController@update');
	Route::delete('users/{slug}/membership/{id}', 'MembershipController@destroy');
	// Subscription
	Route::get('users/{slug}/subscriptions', 'SubscriptionController@show');
	Route::post('users/{slug}/subscriptions', 'SubscriptionController@store');
	Route::put('users/{slug}/subscriptions/{id}', 'SubscriptionController@update');
	Route::delete('users/{slug}/subscriptions/{id}', 'SubscriptionController@destroy');
	// Tiv level
	Route::get('users/{slug}/tiv', 'TivLevelController@show');
	Route::post('users/{slug}/tiv', 'TivLevelController@store');
	Route::put('users/{slug}/tiv/{id}', 'TivLevelController@update');
	Route::delete('users/{slug}/tiv/{id}', 'TivLevelController@destroy');
    /**
     * Events
     */
    Route::get('events', 'EventController@index');
    Route::get('events/{slug}', 'EventController@show');
    Route::post('events', 'EventController@store');
    Route::put('events/{slug}', 'EventController@update');
    Route::delete('events/{slug}', 'EventController@destroy');
	/**
	 * Products
	 */
	Route::get('products', 'ProductController@index');
	Route::get('products/{slug}', 'ProductController@show');
	Route::post('products', 'ProductController@store');
	Route::put('products/{slug}', 'ProductController@update');
	Route::delete('products/{slug}', 'ProductController@destroy');
});
