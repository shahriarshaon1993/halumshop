<?php

namespace App\Repositories;

use App\Interface\UserProfileInterface;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserProfileRepository implements UserProfileInterface
{
    public function profileOrder($slug)
    {
        $user = User::where('slug', $slug)->first();
        return Order::select('status_code', 'payment_type', 'status', 'created_at')
            ->where('user_id', $user->id)
            ->orderBy('id', 'DESC')->paginate(10);
    }

    public function track($request)
    {
        return Order::select('status')
            ->where('status_code', $request->order_id)
            ->where('user_id', Auth::id())
            ->first();
    }
}
