<?php

namespace App\Repositories;

use App\Interface\FrontProductInterface;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;

class FrontProductRepository implements FrontProductInterface
{
    public function productView($slug)
    {
        return Product::with('category', 'subcategory', 'brand')
            ->where('slug', $slug)->get()->first();
    }

    public function addProductCart($request, $slug)
    {
        $product = Product::select('id', 'product_title', 'discount_price', 'selling_price', 'image_one')
            ->where('slug', $slug)->first();

        $data = [];
        $data['id'] = $product->id;
        $data['name'] = $product->product_title;
        $data['qty'] = $request->qty;

        if ($product->discount_price == NULL) {
            $data['price'] = $product->selling_price;
        } else {
            $data['price'] = $product->discount_price;
        }

        $data['weight'] = 1;
        $data['options']['image'] = $product->image_one;
        $data['options']['color'] = $request->color;
        $data['options']['size'] = $request->size;
        Cart::add($data);
    }

    public function category($slug)
    {
        return Category::with('product')->where('slug', $slug)->first();
    }
}
