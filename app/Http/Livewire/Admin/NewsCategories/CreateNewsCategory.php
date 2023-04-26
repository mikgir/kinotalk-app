<?php

namespace App\Http\Livewire\Admin\NewsCategories;

use App\Models\NewsCategory;
use App\Repositories\NewsCategoryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Illuminate\Http\RedirectResponse;

class CreateNewsCategory extends Component
{
    public $order;
    public $name;

    protected $rules = [
        'name' => 'required|string|max:255',
        'order' => 'integer'
    ];

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.admin.news-categories.create-news-category')
            ->extends('layouts.admin.master')
            ->section('content');
    }

    /**
     * @param NewsCategoryRepository $newsCategoryRepository
     * @return void
     */
    public function create(NewsCategoryRepository $newsCategoryRepository): RedirectResponse
    {
        $validatedData = $this->validate();

        $newsCategoryRepository->create($validatedData);

        return redirect()->route('admin.news.categories.show');
    }
}
