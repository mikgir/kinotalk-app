<?php

namespace App\Repositories;

use App\Contracts\Repositories\ArticleRepositoryInterface;
use App\Models\Article;
use App\Models\NewsCategory;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function oneById(Article $article): object
    {
        return Article::where('id', '=', $article->id)->get();
    }

    public function getByNewsCategory(NewsCategory $newsCategory): object
    {
        return Article::where('news_category_id', '=', $newsCategory->id)->get();
    }
}
