<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontProductController extends Controller
{
    public function productView($slug)
    {
        $product = Product::with('category', 'subcategory', 'brand')
            ->where('slug', $slug)->get()->first();

        $product_color = explode(',', $product->product_color);
        $product_size = explode(',', $product->product_size);

        // dd($product->video_link);

        return view('frontend.product', compact('product', 'product_color', 'product_size'));
    }
}
