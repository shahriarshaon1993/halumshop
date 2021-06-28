<?php

namespace App\Repositories;

use App\Interface\UserProfileInterface;
use App\Models\Order;
use App\Models\User;

class UserProfileRepository implements UserProfileInterface
{
    public function profileOrder($slug)
    {
        $user = User::where('slug', $slug)->first();
        return Order::where('user_id', $user->id)->orderBy('id', 'DESC')->paginate(10);
    }
}
