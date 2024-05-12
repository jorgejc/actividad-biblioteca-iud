<?php

use App\Http\Controllers\AutoresController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/autores')->group(function () {
    Route::get('/', [AutoresController::class, 'index'])->name('autores');
    Route::get('/crear', [AutoresController::class, 'create'])->name('autores.crear');
    Route::post('/guardar', [AutoresController::class, 'store'])->name('autores.guardar');
    Route::get('/editar/{autor}', [AutoresController::class, 'edit'])->name('autores.editar');
    Route::put('/editar/{autor}', [AutoresController::class, 'update'])->name('autores.actualizar');
});
