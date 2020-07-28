<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Login\Store;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('site.auth.login');
    }

    public function postLogin(Store $request)
    {
        if (auth()->guard('clients')->attempt(['phone' => $request->input('phone'), 'password' => $request->input('password')])) {
            return redirect()->route('site.home');
        } else {
            return redirect()->route('site.login')->with('error', __('dashboard.login_error'));
        }
    }
}
