<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interface\WishlistInterface;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    protected $wishlist;

    public function __construct(WishlistInterface $wishlist)
    {
        $this->middleware('auth');
        $this->wishlist = $wishlist;
    }

    public function storeWishlist(Request $request)
    {
        $this->wishlist->storeWishlist($request);
    }
}
