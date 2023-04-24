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
    public $article_id;
    public $title;
    public $image;
    public $body;
    public $pub_date;
    /**
     * @param Article $article
     * @param ArticleRepository $articleRepository
     * @return void
     */
    public function mount(Article $article, ArticleRepository $articleRepository): void
    {
        $this->article = $articleRepository->oneById($article);
        $this->article_id= $article->id;
        $this->title = $article->title;
        $this->image = $article->image;
        $this->body = $article->body;
        $this->pub_date= $article->updated_at;
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.front.articles.show-article-by-id')
            ->extends('layouts.front.master')
            ->section('content');
    }
}
