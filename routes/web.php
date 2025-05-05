
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OEMController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/users', function() {
    return view('users.index');
});

Route::get('/oems', function() {
    return view('oems.index');
});

Route::get('/companies', [App\Http\Controllers\CompanyController::class, 'index'])->name('companies.index');
Route::post('/companies', [App\Http\Controllers\CompanyController::class, 'store'])->name('companies.store');
