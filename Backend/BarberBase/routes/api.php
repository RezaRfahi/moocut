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
            Route::get('/','index')->name('v1.salon.index');
            Route::put('/store', 'store')->name('v1.salons.store');
            Route::get('/show/{salon}', 'show')->name('v1.salons.show');
            Route::patch('/update/{salon}', 'update')->name('v1.salons.update');
            Route::delete('/destroy/{salon}', 'destroy')->name('v1.salons.delete');
       });
        Route::controller(\App\Http\Controllers\V1\UserController::class)->prefix('users')->group(function (){
            Route::get('/','index')->name('v1.user.index');
            Route::put('/store', 'store')->name('v1.user.store');
            Route::get('/show/{user}', 'show')->name('v1.user.show');
            Route::patch('/update/{user}', 'update')->name('v1.user.update');
            Route::delete('/destroy/{user}', 'destroy')->name('v1.user.delete');
        });
        Route::controller(\App\Http\Controllers\V1\AppointmentController::class)->prefix('appointments')->group(function (){
            Route::get('/','index')->name('v1.appointment.index');
            Route::put('/store', 'store')->name('v1.appointment.store');
            Route::get('/show/{appointment}', 'show')->name('v1.appointment.show');
            Route::patch('/update/{appointment}', 'update')->name('v1.appointment.update');
            Route::delete('/destroy/{appointment}', 'destroy')->name('v1.appointment.delete');
        });
    });
});

Route::prefix('v1')->controller(\App\Http\Controllers\V1\AuthController::class)->group(function(){
    Route::post('register','register')->name('v1.auth.register');
    Route::post('login','login')->name('v1.auth.login');
});
