<?php

namespace App\Repositories;

use App\Contracts\Repositories\ArticleRepositoryInterface;
use App\Models\Article;
use App\Models\NewsCategory;
use Illuminate\Database\Eloquent\Collection;

class ArticleRepository implements ArticleRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return Article::all();
    }
    public function oneById(Article $article): object
    {
        return Article::where('id', '=', $article->id)->get();
    }

    public function getByNewsCategory(NewsCategory $newsCategory): object
    {
        return Article::where('news_category_id', '=', $newsCategory->id)->orderByDesc('created_at')->get();
    }
}
