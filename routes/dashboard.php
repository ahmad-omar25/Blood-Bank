<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]],
    function()
    {
    // Dashboard Home Route

    ######################## Dashboard Controllers ########################
    Route::group(['namespace' => 'Dashboard', 'prefix' => 'admin', 'middleware' => 'auth'], function() {
        // Governorate
        Route::resource('governorates', 'GovernorateController')->except('show');
        Route::get('/', 'GovernorateController@dashboard')->name('admin.dashboard');
        // Users
        Route::resource('users', 'UserController');

    });
});


