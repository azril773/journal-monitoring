<?php

use App\Http\Controllers\MainController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return redirect()->intended("login");
})->name('home');

Route::middleware(['auth', 'verified', RoleMiddleware::class])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->withoutMiddleware(RoleMiddleware::class)->name('dashboard');
    Route::get('mahasiswa', [MainController::class,"coba"])->name('mahasiswa');
});

Route::get("coba", [MainController::class, 'test']);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
