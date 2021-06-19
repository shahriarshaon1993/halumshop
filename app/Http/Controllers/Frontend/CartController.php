<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interface\CartInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CartController extends Controller
{
    protected $cart;

    public function __construct(CartInterface $cart)
    {
        $this->cart = $cart;
    }

    public function addToCart(Request $request)
    {
        $this->cart->addToCart($request);
        return Response::json(['success' => 'Successfully add on your cart']);
    }

    public function showCart()
    {
        $shopcarts = $this->cart->showCart();
        return view('frontend.cart', compact('shopcarts'));
    }

    public function updateCartItem(Request $request)
    {
        $this->cart->updateCartItem($request);

        $notification = array(
            'message' => 'Product Quantity Updated',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function removeCart($rowId)
    {
        $this->cart->removeCart($rowId);

        $notification = array(
            'message' => 'Product remove form cart',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
