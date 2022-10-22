 <?php

use Illuminate\Support\Facades\Route;

Route::controller('DashboardController')->group(function () {
    Route::get('/dashboard', 'adminIndex')->name('admin.dashboard.index');
});

Route::controller('FranchiseController')->prefix('/frachises')->group(function () {
    Route::get('/', 'adminIndex')->name('admin.franchise.index');
    Route::get('/create', 'create')->name('admin.franchise.create');
});

Route::controller('ConstructorController')->group(function () {
    Route::get('/constructors', 'adminIndex')->name('admin.constructor.index');
});

Route::controller('DriverController')->group(function () {
    Route::get('/driver', 'adminIndex')->name('admin.driver.index');
    Route::get('/driver/create', 'create')->name('admin.driver.create');
    Route::post('/driver', 'store')->name('admin.driver.store');
    Route::get('/driver/{driver}/edit', 'edit')->name('admin.driver.edit');
    Route::put('/driver/{driver}', 'update')->name('admin.driver.update');
    Route::delete('/driver/{driver}', 'destroy')->name('admin.driver.destroy');
});

Route::controller('ResultsController')->prefix('/results')->group(function () {
    Route::get('/', 'index')->name('admin.results.index');
    Route::post('/', 'store')->name('admin.results.store');
    Route::put('/{result}', 'update')->name('admin.results.update');
    Route::delete('/{result}', 'destroy')->name('admin.result.destroy');
});

Route::controller('EventController')->group(function () {
    Route::get('/event', 'adminIndex')->name('admin.events.index');
});

Route::controller('Auth\RegisteredUserController')->group(function () {
    Route::get('/users', 'index')->name('admin.users.index');
});

Route::controller('TrackController')->group(function () {
    Route::get('/tracks', 'index')->name('admin.tracks.index');
});

Route::controller('TestController')->group(function () {
    Route::get('/ui-test', 'uiTest')->name('admin.ui.test');
});