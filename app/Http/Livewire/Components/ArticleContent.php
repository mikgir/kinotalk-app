<?php

namespace App\Http\Livewire\Components;

use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ArticleContent extends Component
{
    public $article;

    /**
     * @param Article $article
     * @param ArticleRepository $repository
     * @return void
     */
    public function mount(Article $article, ArticleRepository $repository): void
    {
        $this->article = $repository->getOne($article);

    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.components.article-content');
    }
}
