<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;

// Try to keep these organized by controller in alphabetical order

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::controller(EventController::class)->group(function () {
        Route::get('/calendar', 'index')->name('calendar.index');
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::post('/profile', 'update')->name('profile.update');
    });

    Route::controller(RuleController::class)->group(function () {
        Route::get('/rules', 'index')->name('rules.index');
    });
});

require __DIR__ . '/auth.php';
