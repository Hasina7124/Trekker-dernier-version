<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('manager')->group(function () {
    // Route manager
    Route::get('/dashboard', function () {
        return "manager";
     })->name('dashboard.manager');
});
