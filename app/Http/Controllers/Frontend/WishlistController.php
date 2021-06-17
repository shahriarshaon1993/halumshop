<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interface\WishlistInterface;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class WishlistController extends Controller
{
    protected $wishlist;

    public function __construct(WishlistInterface $wishlist)
    {
        // $this->middleware('auth');
        $this->wishlist = $wishlist;
    }

    public function storeWishlist(Request $request)
    {
        $check = $this->wishlist->storeWishlist($request);

        if ($check == 1) {

            return Response::json(['error' => 'Product Already Has on your wishlist']);
        } elseif ($check == 2) {

            return Response::json(['success' => 'Product Added on wishlist']);
        } elseif ($check == 0) {

            return Response::json(['error' => 'At first logging your account']);
        }
    }
}
