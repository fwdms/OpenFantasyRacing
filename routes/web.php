<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\JsonCollection;
use App\Models\Event;
use Inertia\Inertia;

Route::get('/', fn() => Inertia::render('Home'));

Route::controller('FaqController')->namespace('App\Http\Controllers')->group(function() {
    Route::get('/faq', 'index')->name('faq.index');
});

Route::controller('RuleController')->namespace('App\Http\Controllers')->group(function() {
    Route::get('/rules', 'index')->name('rules.index');
});

Route::group(['prefix' => 'franchise/{franchise:slug}/'], function() {
    Route::controller('ConstructorController')->namespace('App\Http\Controllers')->group(function() {
        Route::get('/constructors', 'index')->name('constructor.index');
        Route::get('/constructor/{slug}', 'show')->name('constructor.show');
    });
    
    Route::controller('DriverController')->namespace('App\Http\Controllers')->group(function() {
        Route::get('/drivers', 'index')->name('driver.index');
        Route::get('/driver/{id}', 'show')->name('driver.show');
    });
    
    Route::controller('EventController')->namespace('App\Http\Controllers')->group(function() {
        Route::get('/events', 'index')->name('event.index');
        Route::get('/event/{race}', 'show')->name('event.show');
        Route::get('/event-collection', function() {
            return new JsonCollection(Event::all());
        })->name('event.index.collection');
    });
});

// Requires Auth
Route::middleware(['auth', 'verified'])->group(function() {
    Route::controller('DashboardController')->namespace('App\Http\Controllers')->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard.index');
    });
    
    Route::controller('LeagueController')->namespace('App\Http\Controllers')->group(function() {
        Route::get('/leagues/create', 'create')->name('league.create');
        Route::get('/leagues/{id}', 'show')->name('league.show');
        Route::post('/leagues', 'store')->name('league.store');
    });
    
    Route::group(['prefix' => '/leagues/{league}/'], function() {
        Route::controller('FantasyTeamController')->namespace('App\Http\Controllers')->group(function() {
            Route::get('/team/{team}', 'show')->name('fantasy-team.show');
        });
    });
    
    Route::controller('ProfileController')->namespace('App\Http\Controllers')->group(function() {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::post('/profile', 'update')->name('profile.update');
    });
    
    Route::controller('ResultsController')->namespace('App\Http\Controllers')->group(function() {
        Route::post('/results', 'store')->name('result.store');
    });
    
    Route::get('/admin', function() {
        return redirect(route('admin.dashboard.index'));
    });
    
    Route::middleware(['admin', 'verified'])->namespace('App\Http\Controllers\Admin')->group(function() {
        Route::group(['prefix' => 'admin'], function() {
            Route::controller('DashboardController')->group(function() {
                Route::get('/dashboard', 'index')->name('admin.dashboard.index');
            });
            Route::controller('FranchiseController')->group(function() {
                Route::get('/franchises', 'index')->name('admin.franchise.index');
            });
            Route::controller('ResultsController')->group(function() {
                Route::get('/results', 'index')->name('admin.results.index');
            });
        });
    });
    
    Route::controller('CollectionController')->namespace('App\Http\Controllers')->group(function() {
        Route::get('/results-collection/{event_id}', 'results')->name('results.index.collection');
        Route::get('/drivers-collection/{franchise:slug}', 'drivers')->name('drivers.index.collection');
    });
});

require __DIR__ . '/auth.php';
