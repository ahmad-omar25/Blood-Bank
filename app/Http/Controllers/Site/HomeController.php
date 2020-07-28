<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.home');
    }

//    public function setting()
//    {
//        $setting = Setting::all();
//        return view('site.home', compact('setting'));
//    }
}
