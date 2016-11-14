<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

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
		return response()->json($article->comments);
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
	    $article = Article::where('slug', $slug);
	    $comment = $article->comments()->create($request->all());
	    return response()->json($comment);
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
	    $article = Article::where('slug', $slug);
	    $comment = Comment::find($id);
	    $comment->fill($request->all());
	    $article->boat()->save($comment);
	    return response()->json($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
	    $comment = Comment::find($id);
	    $comment->delete();
	    return response()->json('comment deleted');
    }
}
