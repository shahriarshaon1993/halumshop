<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersAuthController extends Controller
{
    public function showLognRegistrationForm()
    {
        return view('frontend.auth.login_registration');
    }
}
