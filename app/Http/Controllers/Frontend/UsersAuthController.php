<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersLoginRequest;
use Illuminate\Support\Facades\Auth;

class UsersAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'logout']);
    }

    public function showLognRegistrationForm()
    {
        return view('frontend.auth.login_registration');
    }

    public function proccessLogin(UsersLoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->email_verified_at == NULL) {
                $notification = array(
                    'message' => 'Your account is not activated. Please check your mail',
                    'alert-type' => 'error',
                );

                return Redirect()->back()->with($notification);
            }

            $notification = array(
                'message' => 'User logged in.',
                'alert-type' => 'success',
            );

            return redirect()->intended()->with($notification);
        }

        $notification = array(
            'message' => 'Invalid credentials',
            'alert-type' => 'error',
        );

        return Redirect()->back()->with($notification);
    }
}
