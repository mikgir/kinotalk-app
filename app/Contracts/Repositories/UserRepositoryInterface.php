<?php

namespace App\Contracts\Repositories;
use Illuminate\Database\Eloquent\Collection;


interface UserRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAll(): Collection;

    public function oneById(int $id): object;

}
