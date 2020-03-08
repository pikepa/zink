<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;


Route::get('/', [WelcomeController::class,'index']);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
});


Auth::routes();



