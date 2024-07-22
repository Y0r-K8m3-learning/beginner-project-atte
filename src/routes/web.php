<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UserInfoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



Route::middleware(['verified', 'auth'])->group(function () {

    Route::get('/', [AttendanceController::class, 'index']);
    Route::get('/attendance', [AttendanceController::class, 'index']);
});


Route::get('/search', [AttendanceController::class, 'search']);

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/search/user/attendance', function () {
    return view('search-user');
});
Route::get('/search/user', [UserInfoController::class, 'index']);
Route::get('/search/user/attendance', [UserInfoController::class, 'attendance']);


Route::get('/register', function () {
    return view('auth.register');
});


//メール認証
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/attendance');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/resend', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
