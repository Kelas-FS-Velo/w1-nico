<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\ProfileController;

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
