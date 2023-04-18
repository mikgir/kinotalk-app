<?php

namespace App\Contracts\Repositories;



interface UserRepositoryInterface
{
    public function all(): array;

    public function oneById(int $id): object;

}
