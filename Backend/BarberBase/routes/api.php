<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function (){
    Route::prefix('v1')->group(function (){
       Route::controller(\App\Http\Controllers\V1\SalonController::class)->prefix('salons')->group(function (){
            Route::get('/','index')->name('v1 salon.index');
       });
        Route::controller(\App\Http\Controllers\V1\UserController::class)->prefix('users')->group(function (){

        });
        Route::controller(\App\Http\Controllers\V1\AppointmentController::class)->prefix('appointments')->group(function (){

        });
    });
});

Route::prefix('v1')->controller(\App\Http\Controllers\V1\AuthController::class)->group(function(){
    Route::post('register','register')->name('v1.auth.register');
    Route::post('login','login')->name('v1.auth.login');
});
