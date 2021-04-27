<?php

namespace App\Providers;

use App\Interface\RepoInterface;
use App\Interface\SubCategoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\SubCategoryRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            RepoInterface::class,
            CategoryRepository::class,
        );

        $this->app->bind(
            SubCategoryInterface::class,
            SubCategoryRepository::class,
        );
    }
}
