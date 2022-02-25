<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeagueController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::prefix('/leagues')->middleware(['auth'])->group(function () {
    Route::get('/create', [LeagueController::class, 'create'])->name('league.create');
    Route::post('/', [LeagueController::class, 'store'])->name('leagues.store');
    Route::get('/{id}', [LeagueController::class, 'show'])->name('league.show');
});

require __DIR__.'/auth.php';
