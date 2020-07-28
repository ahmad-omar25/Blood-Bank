<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BloodType;
use App\Models\City;
use App\Models\Governorate;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Dashboard Home Route
    public function dashboard() {
        $users = User::all();
        $governorates = Governorate::all();
        $cities = City::all();
        $bloodTypes = BloodType::all();
        return view('dashboard.home', compact('users', 'governorates', 'cities', 'bloodTypes'));
    }
}
