<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nav', function () {
    return view('componentes.nav');
})->name('nav');



Route::get('/inicio', function () {
    return view('financeiro.inicio');
})->name('inicio');

Route::get('/registrar', function () {
    return view('financeiro.registrar');
})->name('registrar');

Route::get('/extrato', function () {
    return view('financeiro.extrato');
})->name('extrato');

Route::get('/contas', function () {
    return view('financeiro.contas');
})->name('contas');

Route::get('/cartoes', function () {
    return view('financeiro.cartoes');
})->name('cartoes');

Route::get('/objetivos', function () {
    return view('financeiro.objetivos');
})->name('objetivos');

Route::get('/perfil', function () {
    return view('financeiro.perfil');
})->name('perfil');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/financeiro', function () {
    return view('financeiro.index');
})->middleware(['auth', 'verified'])->name('financeiro');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
