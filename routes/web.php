<?php

use App\Http\Controllers\DeferredPropsController;
use App\Http\Controllers\LoadWhenVisibleController;
use App\Http\Controllers\MergingPropsController;
use App\Http\Controllers\PollingController;
use App\Http\Controllers\PrefetchingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::get('/polling', PollingController::class)->name('polling');
Route::get('/deferred-props', DeferredPropsController::class)->name('deferred-props');
Route::get('/prefetching', PrefetchingController::class)->name('prefetching');
Route::get('/load-when-visible', LoadWhenVisibleController::class)->name('load-when-visible');
Route::get('/merging-props', MergingPropsController::class)->name('merging-props');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
