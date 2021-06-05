<?php

namespace App\Providers;

use App\Interface\BrandInterface;
use App\Interface\CouponInterface;
use App\Interface\NewslaterIntterface;
use App\Interface\PostCategoryInterface;
use App\Interface\PostInterface;
use App\Interface\ProductInterface;
use App\Interface\RepoInterface;
use App\Interface\SliderInterface;
use App\Interface\SubCategoryInterface;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CouponRepository;
use App\Repositories\NewslatterRepository;
use App\Repositories\PostCategoryRepository;
use App\Repositories\PostRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SliderRepository;
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
            BrandInterface::class,
            BrandRepository::class,
        );

        $this->app->bind(
            CouponInterface::class,
            CouponRepository::class,
        );

        $this->app->bind(
            NewslaterIntterface::class,
            NewslatterRepository::class,
        );

        $this->app->bind(
            ProductInterface::class,
            ProductRepository::class,
        );

        $this->app->bind(
            PostCategoryInterface::class,
            PostCategoryRepository::class,
        );

        $this->app->bind(
            PostInterface::class,
            PostRepository::class,
        );

        $this->app->bind(
            SliderInterface::class,
            SliderRepository::class,
        );
    }
}
