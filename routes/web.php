<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Instructors\ProfileController as InstructorsProfileController;
use App\Http\Controllers\Student\ProfileController as StudentProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/dashboard', DashboardController::class)->middleware('auth')->name('dashboard');


Route::middleware(["auth","role:instrauctor"])->prefix('instrauctor')->group(function () {
    Route::get('/dashboard', [InstructorsProfileController::class,'index'])->name('instrauctor.dashboard');
});


Route::middleware(["auth","role:student"])->prefix('student')->group(function () {
    Route::get('/dashboard', [StudentProfileController::class,'index'])->name('student.dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
