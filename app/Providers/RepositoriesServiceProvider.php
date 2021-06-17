<?php

namespace App\Providers;

use App\Interface\BrandInterface;
use App\Interface\CartInterface;
use App\Interface\CouponInterface;
use App\Interface\HomeInterface;
use App\Interface\NewslaterIntterface;
use App\Interface\PostCategoryInterface;
use App\Interface\PostInterface;
use App\Interface\ProductInterface;
use App\Interface\RepoInterface;
use App\Interface\SliderInterface;
use App\Interface\WishlistInterface;
use App\Repositories\BrandRepository;
use App\Repositories\CartRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CouponRepository;
use App\Repositories\HomeRepository;
use App\Repositories\NewslaterRepository;
use App\Repositories\PostCategoryRepository;
use App\Repositories\PostRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SliderRepository;
use App\Repositories\WishlistRepository;
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
            NewslaterRepository::class,
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

        $this->app->bind(
            HomeInterface::class,
            HomeRepository::class,
        );

        $this->app->bind(
            WishlistInterface::class,
            WishlistRepository::class,
        );

        $this->app->bind(
            CartInterface::class,
            CartRepository::class,
        );
    }
}
