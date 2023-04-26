<?php

namespace App\Http\Livewire\Admin\NewsCategories;

use App\Models\NewsCategory;
use App\Repositories\NewsCategoryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class EditNewsCategories extends Component
{
    public $newsCategory;

    protected $rules = [
        'name' => 'required|string|max:255',
        'order' => 'integer'
    ];

    public function mount(NewsCategory $newsCategory, NewsCategoryRepository $newsCategoryRepository){
        $this->newsCategory = $newsCategoryRepository->oneById($newsCategory);
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.admin.news-categories.edit-news-categories')
            ->extends('layouts.admin.master')
            ->section('content');

    }

    /**
     * @param NewsCategoryRepository $newsCategoryRepository
     * @return RedirectResponse
     */
    public function update(NewsCategoryRepository $newsCategoryRepository): RedirectResponse
    {
        $this->validate();

        $newsCategoryRepository->update($this->newsCategory);

        return redirect()->route('admin.news.categories.show');
    }
}
