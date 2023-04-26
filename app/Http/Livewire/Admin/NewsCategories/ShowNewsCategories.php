<?php

namespace App\Http\Livewire\Admin\NewsCategories;

use App\Repositories\NewsCategoryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ShowNewsCategories extends Component
{
    public $newsCategories;

    /**
     * @param NewsCategoryRepository $newsCategoryRepository
     * @return void
     */
    public function mount(NewsCategoryRepository $newsCategoryRepository): void
    {
        $this->newsCategories = $newsCategoryRepository->all();
//        die($this->newsCategories);
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.admin.news-categories.show-news-categories')
            ->extends('layouts.admin.master')
            ->section('content');
    }
}
