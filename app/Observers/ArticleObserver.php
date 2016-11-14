<?php

namespace App\Observers;

use App\Article;
use Illuminate\Support\Str;

class ArticleObserver
{
	/**
	 * Listen to the Article saving event.
	 *
	 * @param  Article $article
	 * @return void
	 */
	public function saving(Article $article)
	{
		$article->slug = Str::slug($article->title);
	}
}