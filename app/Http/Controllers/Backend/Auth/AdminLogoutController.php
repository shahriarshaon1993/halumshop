<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function proccessLogout()
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }
}