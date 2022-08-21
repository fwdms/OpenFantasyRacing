<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ConstructorController;
use App\Http\Controllers\FantasyTeamController;
use App\Http\Resources\JsonCollection;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\FranchiseController as AdminFranchiseController;
use App\Http\Controllers\Admin\ResultsController as AdminResultsController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ResultsController;
use App\Models\Event;
use App\Models\Result;

Route::inertia('/', 'Home')->name('home');

Route::controller(FAQController::class)->group(function () {
    Route::get('/faq', 'index')->name('faq.index');
});

Route::controller(RuleController::class)->group(function () {
    Route::get('/rules', 'index')->name('rules.index');
});

Route::group(['prefix' => 'franchise/{franchise_slug}/'], function () {
    Route::controller(ConstructorController::class)->group(function () {
        Route::get('/constructors', 'index')->name('constructor.index');
        Route::get('/constructor/{slug}', 'show')->name('constructor.show');
    });

    Route::controller(DriverController::class)->group(function () {
        Route::get('/drivers', 'index')->name('driver.index');
        Route::get('/driver/{id}', 'show')->name('driver.show');
    });

    Route::controller(EventController::class)->group(function () {
        Route::get('/events', 'index')->name('event.index');
        Route::get('/event/{id}', 'show')->name('event.show');
        Route::get('/event-collection', function () {
            return new JsonCollection(Event::all());
        })->name('event.index.collection');
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

    Route::group(['prefix' => '/leagues/{league}/'], function () {
        Route::controller(FantasyTeamController::class)->group(function () {
            Route::get('/team/{team}', 'show')->name('fantasy-team.show');
        });
    });

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::post('/profile', 'update')->name('profile.update');
    });

    Route::controller(ResultsController::class)->group(function () {
        Route::post('/results', 'store')->name('result.store');
    });

    Route::get('/admin', function () {
        return redirect(route('admin.dashboard.index'));
    });

    Route::middleware(['admin', 'verified'])->group(function () {
        Route::group(['prefix' => 'admin/'], function () {
            Route::controller(AdminDashboardController::class)->group(function () {
                Route::get('/dashboard', 'index')->name('admin.dashboard.index');
            });
            Route::controller(AdminFranchiseController::class)->group(function () {
                Route::get('/franchises', 'index')->name('admin.franchise.index');
            });
            Route::controller(AdminResultsController::class)->group(function () {
                Route::get('/results', 'index')->name('admin.results.index');
            });
        });
    });

    Route::controller(CollectionController::class)->group(function () {
        Route::get('/results-collection/{event_id}', 'results')->name('results.index.collection');
        Route::get('/drivers-collection/{franchise_slug}', 'drivers')->name('drivers.index.collection');
    });
});

require __DIR__ . '/auth.php';
