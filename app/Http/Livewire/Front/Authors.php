<?php

namespace App\Http\Livewire\Front;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Authors extends Component
{
    public $authors;

    public function mount()
    {

    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.front.authors')
            ->extends('layouts.front.master')
            ->section('content');
    }
}
