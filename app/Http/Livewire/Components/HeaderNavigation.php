<?php

namespace App\Http\Livewire\Components;

use App\Repositories\NewsCategoryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\NewsCategory;

class HeaderNavigation extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = NewsCategory::all();
    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.components.header-navigation');
    }
}
