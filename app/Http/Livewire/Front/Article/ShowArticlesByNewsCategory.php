<?php

namespace App\Http\Livewire\Front\Article;

use App\Repositories\ArticleRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\NewsCategory;

class ShowArticlesByNewsCategory extends Component
{
    public $articles;

    /**
     * @param NewsCategory $newsCategory
     * @param ArticleRepository $articleRepository
     * @return void
     */
    public function mount(NewsCategory $newsCategory, ArticleRepository $articleRepository): void
    {
        $this->articles = $articleRepository->getByNewsCategory($newsCategory);
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.front.articles.show-articles-by-news-category', [
            'articles' => $this->articles,
        ])
            ->extends('layouts.front.master')
            ->section('content');
    }
}
