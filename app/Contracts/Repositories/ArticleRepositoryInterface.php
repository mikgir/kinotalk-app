<?php

namespace App\Contracts\Repositories;

use App\Models\Article;
use App\Models\NewsCategory;
use Illuminate\Database\Eloquent\Collection;

interface ArticleRepositoryInterface
{
    public function getOne(Article $article): object;

    /**
     * @return Collection
     */
    public function getAll(): Collection;

    public function create(Article $article): object;

    public function update(Article $article): object;

    public function destroy(Article $article): void;

    public function getByNewsCategory(NewsCategory $newsCategory): object;
}
