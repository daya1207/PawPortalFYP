<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HostingController;
use App\Http\Controllers\RescueController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\HostingApplicationController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', function () {
    // Validate and handle the form data, or just test it.
    return 'Form submitted!';
})->name('contact.submit');

// Display Sign Up form
Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

// Process Sign Up form
Route::post('/signup', [\App\Http\Controllers\AuthController::class, 'register'])
     ->name('signup.post');

// Display Log In form
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Process Log In form
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'authenticate'])
     ->name('login.post');

     Route::post('/logout', function (Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    })->name('logout');

    // ----------------------------------
// HOSTING Routes
// ----------------------------------

// Show Hosting page (GET)
Route::get('/hosting', [HostingController::class, 'index'])
->name('hosting.index');

// Process Hosting form (POST)
Route::post('/hosting/apply', [HostingController::class, 'store'])
->name('hosting.store');

// ----------------------------------
// RESCUE Routes
// ----------------------------------

// Show Rescue page (GET)
Route::get('/rescue', [RescueController::class, 'index'])
->name('rescue.index');

// Process Rescue form (POST)
Route::post('/rescue/report', [RescueController::class, 'store'])
->name('rescue.store');

// Show the form to request a password reset link
Route::get('/password/forgot', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');

// Handle form submission (send reset link)
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('password.email');

// Show the form to actually reset password (from link)
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');

// Handle the reset form submission
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])
    ->name('password.update');

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/adoption', function () {
        return view('adoption.index');
    })->name('adoption.index');

    Route::get('/donation', function () {
        return view('donation.index');
    })->name('donation.index');

    Route::get('/hosting', function () {
        return view('hosting.index');
    })->name('hosting.index');

    Route::get('/rescue', function () {
        return view('rescue.index');
    })->name('rescue.index');

    Route::resource('cats', CatController::class);
    Route::resource('hosting_applications', HostingApplicationController::class);
