<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferralDashboardController;
use App\Http\Controllers\ReferralGuestController;
use App\Http\Middleware\CheckIfReferralEmailProvidedMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/referral/{referralCode:code}', ReferralGuestController::class) -> name('referral.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/referrals', ReferralDashboardController::class)
        ->middleware([CheckIfReferralEmailProvidedMiddleware::class])
        ->name('referrals.index');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
