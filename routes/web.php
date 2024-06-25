

<?php

use Illuminate\Support\Facades\Route;   
use App\Models\Inversionista;
use App\Http\Controllers\InversionistaController;
use App\Http\Controllers\PublicarEmprendimientoController;


//plicar_emprendimiento k
Route::get('/trabajo/tabla',[PublicarEmprendimientoController::class,'create']);
Route::post('Publicar_Emprendimiento/store', [PublicarEmprendimientoController::class,'store'])->name('Publicar_Emprendimiento.store');
Route::get('trabajo/listar',[PublicarEmprendimientoController::class,'index'])->name('trabajo.index');
Route::get('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'show'])->name('trabajo.show');
Route::put('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'update'])->name('trabajo.update');//nuevo
Route::delete('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'destroy'])->name('trabajo.destroy');
Route::get('trabajo/{trabajo}/editar',[PublicarEmprendimientoController::class,'edit'])->name('trabajo.edit');






Route::get('inversionistas/create', [InversionistaController::class, 'create'])->name('inversionistas.create');
Route::post('inversionistas/store', [InversionistaController::class, 'store'])->name('inversionistas.store');
Route::get('inversionistas/listar', [InversionistaController::class, 'index'])->name('inversionistas.index');
Route::delete('inversionistas/{inversionista}', [InversionistaController::class, 'destroy'])->name('inversionistas.destroy');
Route::get('inversionistas/{inversionista}', [InversionistaController::class, 'show'])->name('inversionistas.show');
Route::put('inversionistas/{inversionista}',[InversionistaController::class,'update'])->name('inversionistas.update');
Route::get('inversionistas/{inversionista}/editar',[InversionistaController::class,'edit'])->name('inversionistas.edit');


