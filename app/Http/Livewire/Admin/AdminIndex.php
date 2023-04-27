<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Livewire\Component;

class AdminIndex extends Component
{
    /**
     * @param Request $request
     * @return Factory|View|Application
     */
    public function render(Request $request): Factory|View|Application
    {
        return view('livewire.admin.admin-index', [
            'user' => $request->user(),
        ])
            ->layout('layouts.admin.master');
    }
}
