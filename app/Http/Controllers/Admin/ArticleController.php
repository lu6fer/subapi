<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$articles = Article::with(['user' => function($q)
		{
			$q->select('id', 'name', 'first_name');
		}])->get();
		return response()->json($articles);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$article = Article::where('slug', $slug)
			->with(['user' => function($q)
			{
				$q->select('id', 'name', 'first_name');
			}])
			->with('comments')
			->first();
		return response()->json($article);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$user = User::findOrFail($request->input('user_id'));
		$article = new Article($request->all());
		$article->user()->associate($user);
		$article->save();
		//$user->articles()->save($article);
		return response()->json($article);
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
		$article = Article::where('slug', $slug)->first();
		$article->fill($request->all());
		return response()->json($article);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug)
	{
		$article = Article::where('slug', $slug)->first();
		$article->delete();
		return response()->json('article deleted');
	}
}
