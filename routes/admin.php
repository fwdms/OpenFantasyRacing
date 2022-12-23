<?php

use Illuminate\Support\Facades\Route;

Route::controller('DashboardController')->group(function () {
    Route::get('/dashboard', 'adminIndex')->name('admin.dashboard.index');
});

Route::controller('FranchiseController')->prefix('/franchises')->group(function () {
    Route::get('/', 'adminIndex')->name('admin.franchise.index');
    Route::get('/create', 'create')->name('admin.franchise.create');
    Route::post('/store', 'store')->name('admin.franchise.store');
    Route::get('/{franchise}/edit', 'edit')->name('admin.franchise.edit');
    Route::put('/{franchise}', 'update')->name('admin.franchise.update');
    Route::delete('/{franchise}', 'destroy')->name('admin.franchise.destroy');
});

Route::controller('ConstructorController')->prefix('/constructors')->group(function () {
    Route::get('/', 'adminIndex')->name('admin.constructor.index');
    Route::get('/create', 'create')->name('admin.constructor.create');
    Route::post('/', 'store')->name('admin.constructor.store');
    Route::get('/{team}/edit', 'edit')->name('admin.constructor.edit');
    Route::put('/{team}', 'update')->name('admin.constructor.update');
    Route::delete('/{team}', 'destroy')->name('admin.constructor.destroy');
});

Route::controller('DriverController')->prefix('driver')->group(function () {
    Route::get('/', 'adminIndex')->name('admin.driver.index');
    Route::get('/create', 'create')->name('admin.driver.create');
    Route::post('/', 'store')->name('admin.driver.store');
    Route::get('/{driver}/edit', 'edit')->name('admin.driver.edit');
    Route::put('/{driver}', 'update')->name('admin.driver.update');
    Route::delete('/{driver}', 'destroy')->name('admin.driver.destroy');
});

Route::controller('ResultsController')->prefix('/results')->group(function () {
    Route::get('/', 'index')->name('admin.results.index');
    Route::post('/', 'store')->name('admin.results.store');
    Route::put('/{result}', 'update')->name('admin.results.update');
    Route::delete('/{result}', 'destroy')->name('admin.result.destroy');
});

Route::controller('EventController')->group(function () {
    Route::get('/event', 'adminIndex')->name('admin.events.index');
    Route::get('/event/create', 'create')->name('admin.events.create');
});

Route::controller('Auth\RegisteredUserController')->group(function () {
    Route::get('/users', 'index')->name('admin.users.index');
});

Route::controller('TrackController')->prefix('tracks')->group(function () {
    Route::get('/', 'index')->name('admin.tracks.index');
    Route::get('/create', 'create')->name('admin.tracks.create');
    Route::post('/', 'store')->name('admin.tracks.store');
    Route::delete('/{track}', 'destroy')->name('admin.tracks.destroy');
});

Route::controller('TestController')->group(function () {
    Route::get('/ui-test', 'uiTest')->name('admin.ui.test');
});
