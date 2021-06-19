<?php

namespace App\Repositories;

use App\Models\Product;
use App\Interface\CartInterface;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartRepository implements CartInterface
{
    public function addToCart($request)
    {
        $id = $request->id;
        $product = Product::select('id', 'product_title', 'discount_price', 'selling_price', 'image_one')
            ->where('id', $id)->first();
        $data = [];

        $data['id'] = $product->id;
        $data['name'] = $product->product_title;
        $data['qty'] = 1;

        if ($product->discount_price == NULL) {
            $data['price'] = $product->selling_price;
        } else {
            $data['price'] = $product->discount_price;
        }

        $data['weight'] = 1;
        $data['options']['image'] = $product->image_one;
        $data['options']['color'] = '';
        $data['options']['size'] = '';
        Cart::add($data);
    }

    public function showCart()
    {
        return Cart::content();
    }

    public function updateCartItem($request)
    {
        $rowId = $request->productId;
        $qty = $request->qty;

        Cart::update($rowId, $qty);
    }

    public function removeCart($rowId)
    {
        Cart::remove($rowId);
    }
}
