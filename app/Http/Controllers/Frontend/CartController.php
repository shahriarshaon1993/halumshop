<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interface\CartInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    protected $cart;

    public function __construct(CartInterface $cart)
    {
        $this->cart = $cart;
        $this->middleware('auth', ['only' => 'checkout']);
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

    public function checkout()
    {
        if (Auth::check()) {
            $cart = Cart::content();

            return view('frontend.checkout', compact('cart'));
        } else {
            $notification = array(
                'message' => 'At first logging your account',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
