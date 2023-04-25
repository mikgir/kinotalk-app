<?php

namespace App\Http\Livewire\Admin\NewsCategories;

use App\Models\NewsCategory;
use App\Repositories\NewsCategoryRepository;
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

    public function render()
    {
        return view('livewire.admin.news-categories.edit-news-categories')
            ->extends('layouts.admin.master')
            ->section('content');
    }

    /**
     * @param NewsCategoryRepository $newsCategoryRepository
     * @return void
     */
    public function update(NewsCategoryRepository $newsCategoryRepository): RedirectResponse
    {
        $this->validate();

        $newsCategoryRepository->update($this->newsCategory);

        return redirect()->route('admin.news.categories.show');
    }
}
