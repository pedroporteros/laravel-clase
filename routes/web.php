<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PruebaController::class, 'index'])->name('pri');

Route::get('/registro', [PruebaController::class, 'create'])->name('reg');

Route::get('/tabla', [PruebaController::class, 'show'])->name('tab');



Route::get('/dashboard', function () {
    $users = DB::table('users')->get();

    return view('dashboard', ['users'=>$users]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
