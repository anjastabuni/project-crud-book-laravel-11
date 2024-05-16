<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TanggalMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/hallo/{nama}', function ($nama) {
    return "Hallo Selamat datang {$nama}";
})->name('hallo');

Route::middleware(TanggalMiddleware::class)->get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// Route::get('kontak', [KontakController::class, 'index'])->name('kontak.index');
// Route::get('kontak/create', [KontakController::class, 'create'])->name('kontak.create');
// Route::post('kontak', [KontakController::class, 'store'])->name('kontak.store');
// Route::get('kontak/{id}', [KontakController::class, 'show'])->name('kontak.show');
// Route::get('kontak/{id}/edit', [KontakController::class, 'edit'])->name('kontak.edit');
// Route::put('kontak/{id}', [KontakController::class, 'update'])->name('kontak.update');
// Route::delete('kontak/{id}', [KontakController::class, 'delete'])->name('kontak.update');

// Route::resource('kontak', KontakController::class);
Route::get('/kontak', [\App\Http\Controllers\KontakController::class, 'index'])->name('kontak.index');
Route::get('/kontak/create', [\App\Http\Controllers\KontakController::class, 'create'])->name('kontak.create');
Route::post('/kontak', [\App\Http\Controllers\KontakController::class, 'store'])->name('kontak.store');
Route::get('/kontak/{kontak}', [\App\Http\Controllers\KontakController::class, 'show'])->name('kontak.show');

Route::resource('book', BookController::class);

Route::prefix('artikel')->group(function () {
    Route::get('/artikel');
    Route::get('/artikel/edit');
    Route::get('/artikel/create');
});
