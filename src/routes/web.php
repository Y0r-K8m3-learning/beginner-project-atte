<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Auth;

Route::middleware('auth')->group(function () {

    Route::get('/', [AttendanceController::class, 'index']);
});

Route::get('/search', [AttendanceController::class, 'search']);
Route::get('/attendance', [AttendanceController::class, 'index']);
Route::post('/attendance', [AttendanceController::class, 'AttendanceLogic']);

Route::get('/login', function () {
    return view('auth.login');
});



Route::get('/register', function () {
    if (Auth::check()) {
        return view('auth.login');
    } else {
        return view('auth.register');
    }
});
