<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Login\Login;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('dashboard.auth.login');
    }

    public function postLogin(Login $request)
    {
        if (auth()->guard('web')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->with('error', __('dashboard.login_error'));
        }
    }
}
