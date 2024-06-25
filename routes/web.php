<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResenaController;






//
Route::get('resena/create',[ResenaController::class,'create']);
Route::post('resenas/store', [ResenaController::class,'store'])->name('resenas.store');
Route::get('resena/listar',[ResenaController::class,'index'])->name('resena.index');
Route::get('resena/{resena}',[ResenaController::class,'show'])->name('resena.show');
Route::put('resena/{resena}',[ResenaController::class,'update'])->name('resena.update');//nuevo
Route::delete('resena/{resena}',[ResenaController::class,'destroy'])->name('resena.destroy');
Route::get('resena/{resena}/editar',[ResenaController::class,'edit'])->name('resena.edit');


