<?php

namespace App\Repositories;

use App\Interface\WishlistInterface;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class WishlistRepository implements WishlistInterface
{
    public function storeWishlist($request)
    {
        $id = $request->id;
        $user_id = Auth::id();
        $check = Wishlist::where('user_id', $user_id)->where('product_id', $id)->first();

        $wishlist = new Wishlist();

        $wishlist->user_id = $user_id;
        $wishlist->product_id = $id;

        if (Auth::check()) {
            if ($check) {

                return Response::json(['error' => 'Product Already Has on your wishlist']);
            } else {

                $wishlist->save();
                return Response::json(['success' => 'Product Added on wishlist']);
            }
        } else {

            return Response::json(['error' => 'At first logging your account']);
        }
    }
}
