<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OEMController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// User Management Routes
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::put('/{user}', [UserController::class, 'update'])->name('update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
});

// OEM Management Routes
Route::prefix('oems')->name('oems.')->group(function () {
    Route::get('/', [OEMController::class, 'index'])->name('index');
    Route::post('/', [OEMController::class, 'store'])->name('store');
    Route::put('/{oem}', [OEMController::class, 'update'])->name('update');
    Route::delete('/{oem}', [OEMController::class, 'destroy'])->name('destroy');
});

// Company Management Routes
Route::prefix('companies')->name('companies.')->group(function () {
    Route::get('/', [CompanyController::class, 'index'])->name('index');
    Route::post('/', [CompanyController::class, 'store'])->name('store');
    Route::put('/{company}', [CompanyController::class, 'update'])->name('update');
    Route::delete('/{company}', [CompanyController::class, 'destroy'])->name('destroy');
});

// Remove duplicate routes
