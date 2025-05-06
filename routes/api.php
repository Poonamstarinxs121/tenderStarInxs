<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\OEMController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// User routes
Route::post('/users', [UserController::class, 'store']);

// Company routes
Route::post('/companies', [CompanyController::class, 'store']);

// OEM routes
Route::post('/oems', [OEMController::class, 'store']); 