<?php

namespace App\Repositories;

use App\Models\Product;
use App\Interface\CartInterface;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartRepository implements CartInterface
{
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
