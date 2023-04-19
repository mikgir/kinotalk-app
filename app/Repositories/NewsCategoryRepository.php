<?php

namespace App\Repositories;

use App\Contracts\Repositories\NewsCategoryRepositoryInterface;
use App\Models\NewsCategory;
use Illuminate\Database\Eloquent\Collection;

class NewsCategoryRepository implements NewsCategoryRepositoryInterface
{
    public function all(): Collection
    {
        return NewsCategory::all();
    }

    public function oneById(NewsCategory $newsCategory): object
    {
        return NewsCategory::where('id', '=', $newsCategory->id)->get();
    }
}
