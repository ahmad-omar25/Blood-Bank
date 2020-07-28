<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::group(['namespace' => 'Site'], function () {
            Route::get('/', 'HomeController@index')->name('site.home');
            Route::get('login', 'LoginController@login')->name('site.login');
            Route::get('register', 'RegisterController@index')->name('site.register');
            Route::post('postRegister', 'RegisterController@store')->name('site.postRegister');
            Route::post('sign-in', 'LoginController@postLogin')->name('site.sign-in');
        });
    });
Auth::routes();

