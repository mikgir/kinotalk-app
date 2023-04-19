<?php

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Models\NewsCategory;

interface NewsCategoryRepositoryInterface
{
    public function all(): Collection;

    public function oneById(NewsCategory $newsCategory): object;

}
