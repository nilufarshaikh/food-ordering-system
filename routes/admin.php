<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->middleware("web", "auth", "role:admin")->name('dashboard');
});
