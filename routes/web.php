<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});


Route::middleware(['auth', 'verified'])->prefix('users')->name('users.')->group(function () {
    Route::get('{user}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('{user}', [UserController::class, 'update'])->name('update');
    Route::delete('{user}', [UserController::class, 'destroy'])->name('destroy');
});



Route::middleware('auth')->get('/clear-cache', function() {
    Artisan::call('optimize:clear'); 
    
    return back()->with('status', 'All application caches have been cleared.');
})->name('clear-cache');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
