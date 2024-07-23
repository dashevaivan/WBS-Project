<?php

use App\Http\Controllers\landingcontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\regiscontroller;
use App\Http\Controllers\reportcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/home', [landingcontroller::class, 'index'])->name('home');
Route::get('/login', [logincontroller::class, 'index'])->name('login');
Route::get('/register', [regiscontroller::class, 'index'])->name('register');
Route::get('/forgotpass', [logincontroller::class, 'create'])->name('forgot');
Route::get('/changepassword', [logincontroller::class, 'store'])->name('changepassword');
Route::get('/submitreport', [reportcontroller::class, 'index']);
Route::get('/thankyou', [reportcontroller::class, 'create']);
Route::get('/reportdetail', [reportcontroller::class, 'detail']);
Route::get('/adminreport', [reportcontroller::class, 'adminreport']);
Route::get('/feedback', [reportcontroller::class, 'givefeedback']);
