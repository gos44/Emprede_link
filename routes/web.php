<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmprendedorController;
use App\Http\Controllers\EmprendimientoController;





//Emprendedor


Route::get('emprendedor/create', [EmprendedorController::class, 'creates']);
Route::post('emprender/store', [EmprendedorController::class, 'store'])->name('emprender.store');
Route::get('emprendedor/listar', [EmprendedorController::class, 'index'])->name('emprendedor.index');
Route::delete('emprendedor/{emprendedor}', [EmprendedorController::class, 'destroy'])->name('emprendedor.destroy');
Route::get('emprendedor/{emprendedor}', [EmprendedorController::class, 'show'])->name('emprendedor.show');
Route::put('emprendedor/{emprendedor}', [EmprendedorController::class, 'update'])->name('emprendedor.update');
Route::get('emprendedor/{emprendedor}/editar', [EmprendedorController::class, 'edit'])->name('emprendedor.edit');


//emprendimiento
Route::get('emprendimiento/create', [EmprendimientoController::class, 'creates']);
Route::post('emprendimiento/store', [EmprendimientoController::class, 'store'])->name('emprendimiento.store');
Route::get('emprendimientos/listar2', [EmprendimientoController::class, 'index'])->name('emprendimientos.index');
Route::delete('emprendimiento/{emprendimiento}', [EmprendimientoController::class, 'destroy'])->name('emprendimiento.destroy');
Route::get('emprendimiento/{emprendimiento}', [EmprendimientoController::class, 'show'])->name('emprendimiento.show');
Route::put('emprendimiento/{emprendimiento}', [EmprendimientoController::class, 'update'])->name('emprendimiento.update');
Route::get('emprendimiento/{emprendimiento}/editar', [EmprendimientoController::class, 'edit'])->name('emprendimiento.edit');








