<?php

namespace App\Http\Livewire\Front;

use App\Repositories\NewsCategoryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class NewsCategory extends Component
{
    public $newsCategories;

    /**
     * @param NewsCategoryRepository $newsCategoryRepository
     * @return void
     */
    public function mount(NewsCategoryRepository $newsCategoryRepository): void
    {
        $this->newsCategories = $newsCategoryRepository->all();
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.front.news-category')
            ->extends('layouts.front.master')
            ->section('content');
    }
}
