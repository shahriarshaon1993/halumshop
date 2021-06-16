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
            ->select('id', 'product_title', 'slug', 'selling_price', 'discount_price', 'image_one')->orderBy('created_at', 'DESC')->limit(10)->get();
    }

    public function hotDeal()
    {
        return Product::where('status', 1)->where('hot_deal', 1)
            ->select('id', 'product_title', 'slug', 'selling_price', 'discount_price', 'image_one')->orderBy('created_at', 'DESC')->limit(3)->get();
    }

    public function bestSeller()
    {
        return Product::where('status', 1)->where('best_seller', 1)
            ->select('id', 'product_title', 'slug', 'selling_price', 'discount_price', 'image_one')->orderBy('created_at', 'DESC')->limit(10)->get();
    }

    public function trand()
    {
        return Product::where('status', 1)->where('trand', 1)
            ->select('id', 'product_title', 'slug', 'selling_price', 'discount_price', 'image_one')->orderBy('created_at', 'DESC')->limit(10)->get();
    }

    public function posts()
    {
        return Post::where('status', 1)
            ->select('id', 'title_en', 'title_bn', 'slug', 'description_en', 'description_bn', 'image', 'created_at')->orderBy('created_at', 'DESC')->limit(10)->get();
    }

    public function newArrival()
    {
        return Product::where('status', 1)->where('new_arrival', 1)
            ->select('id', 'product_title', 'slug', 'selling_price', 'discount_price', 'image_one')->orderBy('created_at', 'DESC')->limit(10)->get();
    }

    public function brands()
    {
        return Brand::select('id', 'slug', 'logo')->orderBy('created_at', 'DESC')->limit(10)->get();
    }

    public function parentCategories()
    {
        return Category::whereNull('category_id')
            ->select('id', 'name', 'slug')
            ->orderBy('created_at', 'DESC')
            ->limit(9)->get();
    }

    public function specialOffer()
    {
        return Product::where('status', 1)->where('special_offer', 1)
            ->select('id', 'product_title', 'slug', 'selling_price', 'discount_price', 'image_one')->orderBy('created_at', 'DESC')->limit(3)->get();
    }
}
