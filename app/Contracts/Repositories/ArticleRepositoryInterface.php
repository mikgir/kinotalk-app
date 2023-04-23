<?php

namespace App\Contracts\Repositories;

use App\Models\Article;
use App\Models\NewsCategory;
use phpDocumentor\Reflection\Types\Collection;

interface ArticleRepositoryInterface
{
    public function oneById(Article $article): object;

    public function getByNewsCategory(NewsCategory $newsCategory): object;
}
