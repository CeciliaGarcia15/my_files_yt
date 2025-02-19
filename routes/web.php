<?php

use App\Http\Middleware\CheckForAuthentication;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard;
use App\Livewire\Files\ShowFile;
use Illuminate\Support\Facades\Route;

Route::get("/login", Login::class)->name("login");
Route::get("/register", Register::class)->name("register");
Route::middleware(CheckForAuthentication::class)->group(function () {
    Route::get("/", Dashboard::class)->name('dashboard');
    Route::get("/show-file/{id}", ShowFile::class)->name('show.file')->lazy();
});
