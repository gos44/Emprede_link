<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerconsultar_lista;
use App\Http\Controllers\PublicarEmprendimientoController;
use App\Http\Controllers\controllerconsultar_todo;
use App\Http\Controllers\ConsultListController;
use App\Http\Controllers\ConsultEverythingController;






//plicar_emprendimiento k
Route::get('trabajo/tabla',[PublicarEmprendimientoController::class,'create']);
Route::post('Publicar_Emprendimiento/store', [PublicarEmprendimientoController::class,'store'])->name('Publicar_Emprendimiento.store');
Route::get('trabajo/listar',[PublicarEmprendimientoController::class,'index'])->name('trabajo.index');
Route::get('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'show'])->name('trabajo.show');
Route::put('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'update'])->name('trabajo.update');//nuevo
Route::delete('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'destroy'])->name('trabajo.destroy');
Route::get('trabajo/{trabajo}/editar',[PublicarEmprendimientoController::class,'edit'])->name('trabajo.edit');








