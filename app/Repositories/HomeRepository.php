<?php

namespace App\Repositories;

use App\Interface\HomeInterface;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Slider;

class HomeRepository implements HomeInterface
{
    public function sliders()
    {
        return Slider::where('status', 1)
            ->select('id', 'title', 'description', 'image')
            ->get();
    }

    public function products()
    {
        return Product::where('status', 1)
            ->select('product_title', 'slug', 'selling_price', 'discount_price', 'hot_new', 'image_one', 'image_two')->orderBy('created_at', 'DESC')->limit(8)->get();
    }

    public function bestRated()
    {
        return Product::where('status', 1)
            ->where('best_rated', 1)
            ->select('product_title', 'slug', 'selling_price', 'discount_price', 'hot_new', 'image_one', 'image_two')->orderBy('created_at', 'DESC')->limit(10)->get();
    }

    public function hotDeal()
    {
        return Product::where('status', 1)
            ->where('hot_deal', 1)
            ->select('product_title', 'slug', 'selling_price', 'discount_price', 'hot_new', 'image_one', 'image_two')->orderBy('created_at', 'DESC')->limit(10)->get();
    }

    public function trands()
    {
        return Product::where('status', 1)
            ->where('trand', 1)
            ->select('product_title', 'slug', 'selling_price', 'discount_price', 'hot_new', 'image_one', 'image_two')->orderBy('created_at', 'DESC')->limit(10)->get();
    }

    public function posts()
    {
        return Post::where('status', 1)
            ->select('title_en', 'title_bn', 'slug', 'description_en', 'description_bn', 'image', 'created_at')->orderBy('created_at', 'DESC')->limit(10)->get();
    }

    public function parentCategories()
    {
        return Category::whereNull('category_id')
            ->select('name', 'slug')
            ->orderBy('created_at', 'DESC')
            ->limit(9)->get();
    }

    public function brands()
    {
        return Brand::select('slug', 'logo')->orderBy('created_at', 'DESC')->limit(10)->get();
    }
}
