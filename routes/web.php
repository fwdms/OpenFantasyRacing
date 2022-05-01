<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FranchiseController;

// Try to keep these organized by controller in alphabetical order

Route::inertia('/', 'Home')->name('home');

Route::inertia('/bug-report', 'RequestForms/BugReport')->name('bug-report');

Route::inertia('/feature-request', 'RequestForms/FeatureRequest')->name('feature-request');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard.index');
    });

    Route::controller(EventController::class)->group(function () {
        Route::get('/calendar', 'index')->name('calendar.index');
    });

    Route::controller(FAQController::class)->group(function () {
        Route::get('/faq', 'index')->name('faq.index');
    });

    Route::controller(FranchiseController::class)->group(function () {
        Route::get('/franchise/{id}', 'show')->name('franchise.show');
    });

    Route::controller(LeagueController::class)->group(function () {
        Route::get('/leagues/create', 'create')->name('league.create');
        Route::get('/leagues/{id}', 'show')->name('league.show');
        Route::post('/leagues', 'store')->name('league.store');
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
