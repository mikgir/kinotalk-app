<?php

namespace App\Http\Livewire\Front;

use App\Repositories\ArticleRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use function view;

class Articles extends Component
{
    public $articles;

    public function mount(ArticleRepository $articleRepository)
    {
        $this->articles = $articleRepository->getAll();
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.front.articles.articles')
            ->extends('layouts.front.master')
            ->section('content');
    }
}
