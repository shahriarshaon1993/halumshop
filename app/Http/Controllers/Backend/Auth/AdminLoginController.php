<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('backend.auth.login');
    }

    public function proccessLogin(AdminLoginRequest $request)
    {
        $credentials = request()->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            return redirect()->route('dashboard');
        }

        return redirect()->back();
    }
}
