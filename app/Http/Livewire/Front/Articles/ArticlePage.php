<?php

namespace App\Http\Livewire\Front\Articles;

use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ArticlePage extends Component
{
    public $article;


    /**
     * @param Article $article
     */
    public function mount(Article $article)
    {
        $this->article = $article;

    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.front.articles.show-article')
            ->extends('layouts.front.master')
            ->section('content');
    }
}
