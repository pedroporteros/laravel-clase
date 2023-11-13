<?php

use App\Http\Controllers\UsuarioController;
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

// Route::get('/', [CursoController::class, 'index'])->name('pri');
// Route::get('/contacto', [CursoController::class, 'create'])->name('con');
// Route::get('/blog', [CursoController::class, 'show'])->name('blg');


Route::get('/', [PruebaController::class, 'index'])->name('pri');

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usr');

Route::view('/blog', 'blog')->name('blg');
Route::view('/contacto', 'contacto')->name('con');

