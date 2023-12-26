<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => inertia('Home'))->name('home.index');

Route::controller('FaqController')
    ->group(function () {
        Route::get('faq', 'index')->name('faq.index');
    });

Route::controller('RuleController')
    ->group(function () {
        Route::get('rules', 'index')->name('rules.index');
    });

Route::group(['prefix' => 'franchise/{franchise:slug}/'], function () {
    Route::controller('ConstructorController')
        ->prefix('/constructors')
        ->group(function () {
            Route::get('/', 'index')->name('constructor.index');
            Route::get('{slug}', 'show')->name('constructor.show');
        });

    Route::controller('DriverController')
        ->prefix('/drivers')
        ->group(function () {
            Route::get('/', 'index')->name('driver.index');
            Route::get('{driver}', 'show')->name('driver.show');
        });

    Route::controller('EventController')
        ->prefix('/events')
        ->group(function () {
            Route::get('/', 'index')->name('event.index');
            Route::get('{race}', 'show')->name('event.show');
        });
});

// Requires Auth
Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller('DashboardController')
        ->prefix('/dashboard')
        ->group(function () {
            Route::get('/', 'index')->name('dashboard.index');
        });

    Route::controller('LeagueController')
        ->prefix('/leagues')
        ->group(function () {
            Route::get('create', 'create')->name('league.create');
            Route::get('{league}', 'show')->name('league.show');
            Route::post('/', 'store')->name('league.store');
        });

    Route::group(['prefix' => '/leagues/{league}/'], function () {
        Route::controller('FantasyTeamController')
            ->prefix('/team')
            ->group(function () {
                Route::get('{team}', 'show')->name('fantasy-team.show');
            });
    });

    Route::controller('ProfileController')
        ->prefix('/profile')
        ->group(function () {
            Route::get('/', 'edit')->name('profile.edit');
            Route::post('/', 'update')->name('profile.update');
        });

    Route::controller('ResultsController')
        ->group(function () {
            Route::post('results', 'store')->name('result.store');
        });

    Route::get('admin', function () {
        return redirect(route('admin.dashboard.index'));
    });

    // We should move these into actual controllers
    Route::controller('CollectionController')
        ->group(function () {
            Route::get('results-collection/{race}', 'results')->name('results.index.collection');

            Route::get('drivers-collection/{franchise:slug}', 'drivers')->name('drivers.index.collection');

            Route::get('constructors-collection/{franchise:slug}', 'constructors')->name('constructors.index.collection');

            Route::get('events-collection/{franchise:slug}', 'events')->name('events.index.collection');
        });
});

require __DIR__ . '/auth.php';
