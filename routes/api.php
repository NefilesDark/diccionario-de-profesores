<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\EstudianteController;

Route::apiResource('profesores', ProfesorController::class);
Route::apiResource('estudiantes', EstudianteController::class);