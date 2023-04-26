<?php

namespace App\Http\Livewire\Admin\Users;

use App\Repositories\UserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UsersList extends Component
{
    public $users;

    public function mount(UserRepository $userRepository)
    {
        $this->users = $userRepository->getAll();

    }

    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.admin.users.users-list')
            ->extends('layouts.admin.master')
            ->section('content');
    }
}
