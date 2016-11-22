<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Comment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$article = Article::where('slug', $slug)->first();
		$comments = $article
			->comments()
			->with(['user' => function($q)
				{
					$q->select('id', 'name', 'first_name');
				}])
			->get();
		return response()->success($comments);
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug)
    {
	    $article = Article::where('slug', $slug)->first();
	    $user = User::findOrFail($request->input('user_id'));
	    $comment = new Comment($request->all());
	    $comment->user()->associate($user);
	    $comment->article()->associate($article);
	    $comment->save();
	    return response()->success($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug, $id)
    {
	    $article = Article::where('slug', $slug)->first();
	    $user = User::findOrFail($request->input('user_id'));
	    $comment = Comment::findOrFail($id);
	    $comment->fill($request->all());
	    $comment->user()->associate($user);
	    $comment->article()->associate($article);
	    $comment->save();
	    return response()->success($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $slug
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, $id)
    {
	    $comment = Comment::find($id);
	    $comment->delete();
	    return response()->success('comment deleted');
    }
}
