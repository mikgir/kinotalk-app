<?php

namespace App\Http\Livewire\Admin\NewsCategories;

use App\Repositories\NewsCategoryRepository;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class DeleteNewsCategories extends Component
{
    public $newsCategory;

    /**
     * @param NewsCategoryRepository $newsCategoryRepository
     * @return void
     */
    public function delete(NewsCategoryRepository $newsCategoryRepository): RedirectResponse
    {
        $newsCategoryRepository->destroy($this->newsCategory);

        return redirect()->route('admin.news.categories.show');
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <button type="submit" wire:click="delete{{ $newsCategory }}">Create</button>
            </div>
        blade;
    }
}
