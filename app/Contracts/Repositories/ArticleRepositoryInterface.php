<?php

namespace App\Contracts\Repositories;

use App\Models\Article;
use App\Models\NewsCategory;

interface ArticleRepositoryInterface
{
    public function oneById(Article $article): object;

    public function getByNewsCategory(NewsCategory $newsCategory): object;
}
