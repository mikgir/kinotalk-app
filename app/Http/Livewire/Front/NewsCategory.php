<?php

namespace App\Http\Livewire\Front;

use App\Repositories\NewsCategoryRepository;
use Illuminate\Support\Collection;
use Livewire\Component;

class NewsCategory extends Component
{
    public function getAll(NewsCategoryRepository $newsCategoryRepository)
    {
        $newsCategories = $newsCategoryRepository->all();
        return view('livewire.front.news-category', [
           'newsCategories' => $newsCategories,
        ]);
    }
}
