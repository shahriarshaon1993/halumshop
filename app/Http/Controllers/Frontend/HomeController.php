<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', 1)
            ->select('id', 'title', 'description', 'image')
            ->get();

        $products = Product::where('status', 1)
            ->select('product_title', 'slug', 'selling_price', 'discount_price', 'hot_new', 'image_one', 'image_two')->orderBy('created_at', 'DESC')->limit(8)->get();

        $best_rated = Product::where('status', 1)
            ->where('best_rated', 1)
            ->select('product_title', 'slug', 'selling_price', 'discount_price', 'hot_new', 'image_one', 'image_two')->orderBy('created_at', 'DESC')->limit(4)->get();

        $hot_deal = Product::where('status', 1)
            ->where('hot_deal', 1)
            ->select('product_title', 'slug', 'selling_price', 'discount_price', 'hot_new', 'image_one', 'image_two')->orderBy('created_at', 'DESC')->limit(4)->get();

        $trands = Product::where('status', 1)
            ->where('trand', 1)
            ->select('product_title', 'slug', 'selling_price', 'discount_price', 'hot_new', 'image_one', 'image_two')->orderBy('created_at', 'DESC')->limit(4)->get();

        $posts = Post::where('status', 1)
            ->select('title_en', 'title_bn', 'slug', 'description_en', 'description_bn', 'image', 'created_at')->orderBy('created_at', 'DESC')->limit(3)->get();

        return view('frontend.home', compact('sliders', 'products', 'best_rated', 'hot_deal', 'trands', 'posts'));
    }
}
