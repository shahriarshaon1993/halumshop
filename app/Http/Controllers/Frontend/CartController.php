<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interface\CartInterface;
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
}
