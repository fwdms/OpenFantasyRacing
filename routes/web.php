<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn() => Inertia::render('Home'));

Route::controller('FaqController')
    ->group(function() {
        Route::get('/faq', 'index')->name('faq.index');
    });

Route::controller('RuleController')
    ->group(function() {
        Route::get('/rules', 'index')->name('rules.index');
    });

Route::group(['prefix' => 'franchise/{franchise:slug}/'], function() {
    Route::controller('ConstructorController')
        ->group(function() {
            Route::get('/constructors', 'index')->name('constructor.index');
            Route::get('/constructor/{slug}', 'show')->name('constructor.show');
        });
    
    Route::controller('DriverController')
        ->group(function() {
            Route::get('/drivers', 'index')->name('driver.index');
            Route::get('/driver/{driver}', 'show')->name('driver.show');
        });
    
    Route::controller('EventController')
        ->group(function() {
            Route::get('/events', 'index')->name('event.index');
            Route::get('/event/{race}', 'show')->name('event.show');
        });
});

// Requires Auth
Route::middleware(['auth', 'verified'])->group(function() {
    Route::controller('DashboardController')
        ->group(function() {
            Route::get('/dashboard', 'index')->name('dashboard.index');
        });
    
    Route::controller('LeagueController')
        ->group(function() {
            Route::get('/leagues/create', 'create')->name('league.create');
            Route::get('/leagues/{league}', 'show')->name('league.show');
            Route::post('/leagues', 'store')->name('league.store');
        });
    
    Route::group(['prefix' => '/leagues/{league}/'], function() {
        Route::controller('FantasyTeamController')
            ->group(function() {
                Route::get('/team/{team}', 'show')->name('fantasy-team.show');
            });
    });
    
    Route::controller('ProfileController')
        ->group(function() {
            Route::get('/profile', 'edit')->name('profile.edit');
            Route::post('/profile', 'update')->name('profile.update');
        });
    
    Route::controller('ResultsController')
        ->group(function() {
            Route::post('/results', 'store')->name('result.store');
        });
    
    Route::get('/admin', function() {
        return redirect(route('admin.dashboard.index'));
    });
    
    Route::middleware(['admin', 'verified'])->prefix('admin')->group(function() {
        Route::controller('DashboardController')->group(function() {
            Route::get('/dashboard', 'adminIndex')->name('admin.dashboard.index');
        });
        Route::controller('FranchiseController')->group(function() {
            Route::get('/franchises', 'adminIndex')->name('admin.franchise.index');
        });
        Route::controller('ConstructorController')->group(function() {
            Route::get('/constructors', 'adminIndex')->name('admin.constructor.index');
        });
        Route::controller('DriverController')->group(function() {
            Route::get('/driver', 'adminIndex')->name('admin.driver.index');
            Route::get('/driver/create', 'create')->name('admin.driver.create');
            Route::post('/driver', 'store')->name('admin.driver.store');
            Route::put('/driver/{driver}', 'update')->name('admin.driver.update');
            Route::delete('/driver/{driver}', 'destroy')->name('admin.driver.destroy');
        });
        Route::controller('ResultsController')->group(function() {
            Route::get('/results', 'index')->name('admin.results.index');
            Route::post('/results', 'store')->name('admin.results.store');
            Route::put('/results/{result}', 'update')->name('admin.results.update');
            Route::delete('/results/{result}', 'destroy')->name('admin.result.destroy');
        });
        Route::controller('EventController')->group(function() {
            Route::get('/event', 'adminIndex')->name('admin.events.index');
        });
        Route::controller('Auth\RegisteredUserController')->group(function() {
            Route::get('/users', 'index')->name('admin.users.index');
        });
        Route::controller('TrackController')->group(function() {
            Route::get('/tracks', 'index')->name('admin.tracks.index');
        });
        Route::controller('TestController')->group(function() {
            Route::get('/ui-test', 'uiTest')->name('admin.ui.test');
        });
    });
    
    // We should move these into actual controllers
    Route::controller('CollectionController')
        ->group(function() {
            Route::get('/results-collection/{race}', 'results')
                ->name('results.index.collection');
            
            Route::get('/drivers-collection/{franchise:slug}', 'drivers')
                ->name('drivers.index.collection');
            
            Route::get('/constructors-collection/{franchise:slug}', 'constructors')
                ->name('constructors.index.collection');
            
            Route::get('/events-collection/{franchise:slug}', 'events')
                ->name('events.index.collection');
        });
});

require __DIR__ . '/auth.php';
