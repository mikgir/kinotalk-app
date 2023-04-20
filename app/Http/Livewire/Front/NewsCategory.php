<?php

namespace App\Http\Livewire\Front;

use App\Repositories\NewsCategoryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class NewsCategory extends Component
{
    /**
     * @param NewsCategoryRepository $newsCategoryRepository
     * @return Factory|View|Application
     */
    public function getAll(NewsCategoryRepository $newsCategoryRepository): Factory|View|Application
    {
        $newsCategories = $newsCategoryRepository->all();
        return view('livewire.front.news-category', [
           'newsCategories' => $newsCategories,
        ]);
    }
}
