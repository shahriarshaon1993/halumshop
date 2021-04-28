<?php

namespace App\Providers;

use App\Interface\BrandInterface;
use App\Interface\CouponInterface;
use App\Interface\RepoInterface;
use App\Interface\SubCategoryInterface;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CouponRepository;
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

        $this->app->bind(
            BrandInterface::class,
            BrandRepository::class,
        );

        $this->app->bind(
            CouponInterface::class,
            CouponRepository::class,
        );
    }
}
