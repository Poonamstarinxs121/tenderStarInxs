<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OEMController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // OEM Routes
    Route::resource('oems', OEMController::class);

    Route::get('/companies', function () {
        return view('companies.index');
    })->name('companies.index');

    Route::get('/customers', function () {
        return view('customers.index');
    })->name('customers.index');

    Route::get('/user-management', function () {
        return view('user-management.index');
    })->name('user-management.index');

    Route::get('/leads', function () {
        return view('leads.index');
    })->name('leads.index');

    Route::get('/document-management', function () {
        return view('document-management.index');
    })->name('document-management.index');

    Route::get('/tender-management', function () {
        return view('tender-management.index');
    })->name('tender-management.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
