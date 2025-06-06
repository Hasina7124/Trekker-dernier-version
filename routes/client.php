<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('client')->group(function () {
    // Route de l'administrateur

    // Pour le dashboard
     Route::get('/dashboard', function () {
        return "client";
     })->name('dashboard.client');
});
