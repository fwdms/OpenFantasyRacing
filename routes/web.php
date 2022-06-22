<?php

use App\Http\Controllers\ConstructorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuleController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');

Route::inertia('/bug-report', 'RequestForms/BugReport')->name('bug-report');

Route::inertia('/feature-request', 'RequestForms/FeatureRequest')->name('feature-request');

Route::controller(FAQController::class)->group(function () {
    Route::get('/faq', 'index')->name('faq.index');
});

Route::controller(RuleController::class)->group(function () {
    Route::get('/rules', 'index')->name('rules.index');
});

Route::group(['prefix' => 'franchise/{franchise_slug}/'], function () {
    Route::controller(FranchiseController::class)->group(function () {
        Route::get('/', 'show')->name('franchise.show');
    });

    Route::controller(ConstructorController::class)->group(function () {
        Route::get('/constructor/{slug}', 'show')->name('constructor.show');
    });

    Route::controller(DriverController::class)->group(function () {
        Route::get('/driver/{id}', 'show')->name('driver.show');
    });

    Route::controller(EventController::class)->group(function () {
        Route::get('/events/{id}', 'show')->name('event.show');
    });
});

// Requires Auth
Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard.index');
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
});

require __DIR__.'/auth.php';
