<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTController;
use App\Http\Controllers\ThreadController;


Route::post('/login', [JWTController::class, 'login']);
Route::post('/register', [JWTController::class, 'register']);

Route::group(['middleware' => 'auth.jwt'], function($router) {
    Route::post('/logout', [JWTController::class, 'logout']);
    Route::post('/refresh', [JWTController::class, 'refresh']);
    Route::post('/profile', [JWTController::class, 'profile']);
    Route::resource('threads', ThreadController::class);

});


