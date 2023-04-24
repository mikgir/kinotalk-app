<?php

namespace App\Http\Livewire\Components;

use App\Models\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ArticleCard extends Component
{
    public $article;
    public $article_id;
    public $title;
    public $image;
    public $excerpt;
    public $pub_date;

    /**
     * @param Article $article
     * @param ArticleRepository $articleRepository
     * @return void
     */
    public function mount(Article $article, ArticleRepository $articleRepository): void
    {
        $this->article = $article;
        $this->article_id = $article->id;
        $this->title = $article->title;
        $this->image = $article->image;
        $this->excerpt = $article->excerpt;
        $this->pub_date = $article->updated_at;
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.components.article-card');
    }
}
