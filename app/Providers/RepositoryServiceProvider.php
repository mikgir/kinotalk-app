<?php

namespace App\Providers;

use App\Contracts\Repositories\ArticleRepositoryInterface;
use App\Contracts\Repositories\NewsCategoryRepositoryInterface;
use App\Contracts\Repositories\UserRepositoryInterface;
use App\Repositories\ArticleRepository;
use App\Repositories\NewsCategoryRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(NewsCategoryRepositoryInterface::class, NewsCategoryRepository::class);
        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);
    }
}
