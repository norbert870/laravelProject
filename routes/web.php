<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

Route::get('/pet', [PetController::class, 'index']);
Route::get('/pet/create', [PetController::class, 'create']);
Route::get('/pet/{pet:id}', [PetController::class, 'show']);
Route::post('/pet', [PetController::class, 'store']);
Route::patch('/pet/{pet:id}', [PetController::class, 'update']);
Route::delete('/pet/{pet:id}', [PetController::class, 'destroy']);
Route::get('/pet/{pet:id}', [PetController::class, 'show']);
Route::get('/pet/{pet:id}/edit', [PetController::class, 'edit']);