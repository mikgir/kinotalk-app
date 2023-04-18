<?php

namespace App\Http\Livewire\Front;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class MainPage extends Component
{
    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.front.main-page')
            ->extends('layouts.front.master')
            ->section('main');
    }
}
