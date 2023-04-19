<?php

namespace App\Http\Livewire\Front;

use App\Repositories\ArticleRepository;
use Livewire\Component;
use App\Models\NewsCategory;
use App\Models\Article as ArticleModel;

class Article extends Component
{
    public function getByNewsCategoryId(NewsCategory $newsCategory, ArticleRepository $articleRepository)
    {
        $articles = $articleRepository->getByNewsCategory($newsCategory);
        return view('livewire.front.article', [
            'articles' => $articles
        ]);
    }

    public function getById(ArticleModel $article, ArticleRepository $articleRepository)
    {
        $article = $articleRepository->oneById($article);
        return view('livewire.front.article', [
            'articles' => $article
        ]);
    }
}
