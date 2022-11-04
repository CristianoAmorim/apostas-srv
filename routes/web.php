<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/campeonatos', function () {
    return view('campeonato/campeonato');
})->middleware(['auth', 'verified'])->name('campeonato');

Route::get('/jogos', function () {
    return view('campeonato/jogos');
})->middleware(['auth', 'verified'])->name('jogos');

Route::get('/usuarios/controle', [Controllers\UserController::class,'index'])
    ->middleware(['auth', 'verified'])->name('index');
require __DIR__.'/auth.php';
