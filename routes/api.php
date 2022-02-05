<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::apiResource('users', 'UserController');
    Route::apiResource('blood-requests', 'BloodRequestController');
    Route::apiResource('blood-donations', 'DonateController');
    Route::apiResource('profiles', 'ProfileController');
});
