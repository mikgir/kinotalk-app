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

    /**
     * @param array $data
     * @return object
     */
    public function create(array $data): object
    {
        return NewsCategory::create($data);
    }

    /**
     * @param NewsCategory $newsCategory
     * @return object
     */
    public function update(NewsCategory $newsCategory): object
    {
        NewsCategory::save();
        return $this->oneById($newsCategory);
    }

    public function destroy(NewsCategory $newsCategory): void
    {
        $newsCategory->delete();
    }
}
