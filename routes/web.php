<?php

use Illuminate\Http\Request;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminReportController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

// Redirect root to login
Route::get('/', function () {
    return redirect()->route('login');
});

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// User Authentication Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest:web');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Forgot Password
Route::get('/password/reset', [AuthController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [AuthController::class, 'reset'])->name('password.update');

// Email Verification Routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard'); // Redirect to the intended page after verification
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/resend', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

// User Dashboard Route
Route::middleware(['auth:web', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('reports', ReportController::class);
});

// Admin Authentication Routes
Route::get('/admin/login', [AuthController::class, 'showAdminLoginForm'])->name('admin.login')->middleware('guest:admin');
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login.submit');

// Admin Dashboard Route
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Admin Reports Management Routes
    Route::prefix('admin')->group(function () {
        Route::get('reports', [AdminReportController::class, 'index'])->name('admin.reports.index');
        Route::get('reports/{id}', [AdminReportController::class, 'show'])->name('admin.reports.show');
        Route::put('reports/{id}', [AdminReportController::class, 'update'])->name('admin.reports.update');
        Route::get('/admin/reports/print', [AdminReportController::class, 'print'])->name('admin.reports.print');
    });
});
