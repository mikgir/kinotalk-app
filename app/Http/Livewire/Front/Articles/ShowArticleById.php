<?php

namespace App\Http\Livewire\Front\Articles;

use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ShowArticleById extends Component
{
    public $article;

    /**
     * @param Article $article
     * @param ArticleRepository $articleRepository
     * @return void
     */
    public function mount(Article $article, ArticleRepository $articleRepository): void
    {
        $this->article = $articleRepository->oneById($article);
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.front.articles.show-article-by-id', [
            'article' => $this->article,
        ])
            ->extends('layouts.front.master')
            ->section('content');
    }
}
