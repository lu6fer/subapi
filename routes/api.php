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
		 * BoatLabel
		 */
		Route::get('boat', 'BoatLabelController@index');
		Route::get('boat/{slug}', 'BoatLabelController@show');
		Route::post('boat', 'BoatLabelController@store');
		Route::put('boat/{slug}', 'BoatLabelController@update');
		Route::delete('boat/{slug}', 'BoatLabelController@destroy');
		/**
		 * DiveLabel
		 */
		Route::get('dive', 'DiveLabelController@index');
		Route::get('dive/{slug}', 'DiveLabelController@show');
		Route::post('dive', 'DiveLabelController@store');
		Route::put('dive/{slug}', 'DiveLabelController@update');
		Route::delete('dive/{slug}', 'DiveLabelController@destroy');
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
	Route::post('articles/{slug/comments', 'CommentController@store');
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
    /**
     * Events
     */
    Route::get('events', 'EventController@index');
    Route::get('events/{slug}', 'EventController@show');
    Route::post('events', 'EventController@store');
    Route::put('events/{slug}', 'EventController@update');
    Route::delete('events/{slug}', 'EventController@destroy');
});
