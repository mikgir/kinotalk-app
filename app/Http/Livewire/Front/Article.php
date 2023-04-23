<?php

namespace App\Http\Livewire\Front;

use App\Repositories\ArticleRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\NewsCategory;
use App\Models\Article as ArticleModel;

class Article extends Component
{
    public $article;

    public function mount($id)
    {
        $this->article = \App\Models\Article::find($id);
    }

    /**
     * @param NewsCategory $newsCategory
     * @param ArticleRepository $articleRepository
     * @return Factory|View|Application
     */
    public function getByNewsCategoryId(NewsCategory $newsCategory, ArticleRepository $articleRepository): Factory|View|Application
    {
        $articles = $articleRepository->getByNewsCategory($newsCategory);
        return view('livewire.front.article', [
            'articles' => $articles
        ]);
    }

    /**
     * @param ArticleModel $article
     * @param ArticleRepository $articleRepository
     * @return Factory|View|Application
     */
    public function getById(ArticleModel $article, ArticleRepository $articleRepository): Factory|View|Application
    {
        $article = $articleRepository->oneById($article);
        return view('livewire.front.article', [
            'article' => $article
        ]);
    }
}
