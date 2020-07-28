<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Register\Store;
use App\Models\Client;

class RegisterController extends Controller
{
    public function index() {
        return view('site.auth.register');
    }

    public function store(Store $request) {
        try {
            $clients = $request->except(['password', 'password_confirmation']);
            $clients['password'] = bcrypt($request->input('password'));
            Client::create($clients);
            return redirect()->route('site.login')->with('success', __('dashboard.user_successfully'));
        } catch (\Exception $exception) {
            return redirect()->route('site.register')->with('error', __('dashboard.error'));
        }
    }
}
