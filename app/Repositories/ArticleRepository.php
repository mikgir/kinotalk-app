<?php

namespace App\Repositories;

use App\Contracts\Repositories\ArticleRepositoryInterface;
use App\Models\Article;
use App\Models\NewsCategory;
use Illuminate\Database\Eloquent\Collection;

class ArticleRepository implements ArticleRepositoryInterface
{

    /**
     * @param Article $article
     * @return object
     */
    public function getOne(Article $article): object
    {
        return Article::find($article->id);
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Article::all();
    }

    /**
     * @param Article $article
     * @return object
     */
    public function create(Article $article): object
    {
        // TODO: Implement create() method.
    }

    /**
     * @param Article $article
     * @return object
     */
    public function update(Article $article): object
    {
        // TODO: Implement update() method.
    }

    /**
     * @param NewsCategory $newsCategory
     * @return object
     */
    public function getByNewsCategory(NewsCategory $newsCategory): object
    {
        return NewsCategory::with('article')->paginate(1);
    }



    public function destroy(Article $article): void
    {
        // TODO: Implement destroy() method.
    }
}
