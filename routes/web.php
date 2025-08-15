<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;


Route::get('/', [DashboardController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('/categories', [CategoryController::class]);
    Route::resource('/lessons', [LessonController::class]);
    Route::resource('/roles', [RoleController::class]);
});
