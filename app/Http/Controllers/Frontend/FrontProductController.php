<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interface\FrontProductInterface;
use Illuminate\Http\Request;

class FrontProductController extends Controller
{
    protected $frontProduct;

    public function __construct(FrontProductInterface $frontProduct)
    {
        $this->frontProduct = $frontProduct;
    }

    public function productView($slug)
    {
        $product = $this->frontProduct->productView($slug);

        $product_color = explode(',', $product->product_color);
        $product_size = explode(',', $product->product_size);

        return view('frontend.product', compact('product', 'product_color', 'product_size'));
    }

    public function addProductCart(Request $request, $slug)
    {
        $this->frontProduct->addProductCart($request, $slug);

        $notification = array(
            'message' => 'Product Successfuly Added',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
}
