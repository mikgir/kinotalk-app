<?php

namespace App\Repositories;

use App\Contracts\Repositories\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;


class UserRepository implements UserRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return User::with('roles')->get();
    }

    public function oneById(int $id): object
    {
        // TODO: Implement oneById() method.
    }
}
