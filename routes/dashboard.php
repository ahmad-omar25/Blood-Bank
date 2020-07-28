<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {
        // Dashboard Home Route

        ######################## Dashboard Controllers ########################
        Route::group(['namespace' => 'Dashboard', 'prefix' => 'admin', 'middleware' => 'auth:web'], function () {
            // Governorate
            Route::resource('governorates', 'GovernorateController')->except('show');
            Route::resource('bloodtypes', 'BloodTypeController')->except('show');
            Route::resource('categories', 'CategoryController')->except('show');
            Route::resource('cities', 'CityController')->except('show');
            Route::resource('settings', 'SettingController')->except('show');
            Route::get('/', 'HomeController@dashboard')->name('admin.dashboard');
            // Users
            Route::resource('users', 'UserController');
        });
    });


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::group(['namespace' => 'Dashboard', 'prefix' => 'admin', 'guest:users'], function () {
            Route::get('login', 'LoginController@getLogin')->name('admin.login');
            Route::post('sign-in', 'LoginController@postLogin')->name('admin.sign-in');
        });

    });
