<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Interface\UserProfileInterface;

class UserProfileController extends Controller
{
    protected $profile;

    public function __construct(UserProfileInterface $profile)
    {
        $this->middleware('auth');
        $this->profile = $profile;
    }

    public function index($slug)
    {
        return view('frontend.auth.user_profile');
    }

    public function profileOrder($slug)
    {
        $orders = $this->profile->profileOrder($slug);
        return view('frontend.auth.order', compact('orders'));
    }
}
