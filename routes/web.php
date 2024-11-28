<?php

use App\Http\Controllers\DiretorController;
use App\Http\Controllers\FilmeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('diretor', [DiretorController::class, 'index']);
Route::get('diretor/create', [DiretorController::class, 'create']);
Route::post('diretor', [DiretorController::class, 'store']);
Route::get('diretor/{id}/edit', [DiretorController::class, 'edit']);
Route::put('diretor/{id}', [DiretorController::class, 'update']);
Route::delete('diretor/{id}', [DiretorController::class, 'destroy']);

Route::get('filme', [FilmeController::class, 'index']);
Route::get('filme/create', [FilmeController::class, 'create']);
Route::post('filme', [FilmeController::class, 'store']);
Route::get('filme/{id}/edit', [FilmeController::class, 'edit']);
Route::put('filme/{id}', [FilmeController::class, 'update']);
Route::delete('filme/{id}', [FilmeController::class, 'destroy']);