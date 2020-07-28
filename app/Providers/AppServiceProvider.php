<?php

namespace App\Providers;

use App\Models\BloodType;
use App\Models\City;
use App\Models\Governorate;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->share('settings', Setting::all());
        view()->share('cities', City::get());
        view()->share('governorates', Governorate::get());
        view()->share('bloodTypes', BloodType::get());
    }
}
