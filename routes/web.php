<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/////////////////////////////////////////

Route::resource('alunos', AlunoController::class);
/*
Route::get('aluno',[\App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
Route::get('aluno/create',[\App\Http\Controllers\AlunoController::class, 'create'])->name('aluno.create');
Route::post('aluno',[\App\Http\Controllers\AlunoController::class, 'store'])->name('aluno.store');
Route::get('aluno/{aluno}',[\App\Http\Controllers\AlunoController::class, 'show'])->name('aluno.show');
*/

require __DIR__.'/auth.php';
