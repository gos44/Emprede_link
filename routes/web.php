

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmprendedorController;
use App\Http\Controllers\EmprendimientoController;
use App\Http\Controllers\ReviewController; 
use App\Http\Controllers\InversionistaController;
use App\Http\Controllers\PublicarEmprendimientoController;
use App\Http\Controllers\ConexionController;



//Emprendedor


`Route::get('emprendedor/create', [EnterprisingController::class, 'creates']);
Route::post('emprender/store', [EnterprisingController::class, 'store'])->name('emprender.store');





Route::get('emprendedor/listar', [EmprendedorController::class, 'index'])->name('emprendedor.index');
Route::delete('emprendedor/{emprendedor}', [EmprendedorController::class, 'destroy'])->name('emprendedor.destroy');
Route::get('emprendedor/{emprendedor}', [EmprendedorController::class, 'show'])->name('emprendedor.show');
Route::put('emprendedor/{emprendedor}', [EmprendedorController::class, 'update'])->name('emprendedor.update');
Route::get('emprendedor/{emprendedor}/editar', [EmprendedorController::class, 'edit'])->name('emprendedor.edit');

Route::get('emprendedor/navigation', [EmprendedorController::class, 'navigation'])->name('emprendedor.navigation');

//emprendimiento
Route::get('emprendimiento/create', [EmprendimientoController::class, 'creates']);
Route::post('emprendimiento/store', [EmprendimientoController::class, 'store'])->name('emprendimiento.store');
Route::get('emprendimientos/listar2', [EmprendimientoController::class, 'index'])->name('emprendimientos.index');
Route::delete('emprendimiento/{emprendimiento}', [EmprendimientoController::class, 'destroy'])->name('emprendimiento.destroy');
Route::get('emprendimiento/{emprendimiento}', [EmprendimientoController::class, 'show'])->name('emprendimiento.show');
Route::put('emprendimiento/{emprendimiento}', [EmprendimientoController::class, 'update'])->name('emprendimiento.update');
Route::get('emprendimiento/{emprendimiento}/editar', [EmprendimientoController::class, 'edit'])->name('emprendimiento.edit');


//plicar_emprendimiento k
Route::get('/trabajo/tabla',[PublicarEmprendimientoController::class,'create']);
Route::post('Publicar_Emprendimiento/store', [PublicarEmprendimientoController::class,'store'])->name('Publicar_Emprendimiento.store');
Route::get('trabajo/listar',[PublicarEmprendimientoController::class,'index'])->name('trabajo.index');
Route::get('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'show'])->name('trabajo.show');
Route::put('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'update'])->name('trabajo.update');//nuevo
Route::delete('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'destroy'])->name('trabajo.destroy');
Route::get('trabajo/{trabajo}/editar',[PublicarEmprendimientoController::class,'edit'])->name('trabajo.edit');`

//
Route::get('review/create',[ReviewController::class,'create']);
Route::post('reviews/store', [ReviewController::class,'store'])->name('reviews.store');
Route::get('review/listar',[ReviewController::class,'index'])->name('review.index');
Route::get('review/{review}',[ReviewController::class,'show'])->name('review.show');
Route::put('review/{review}',[ReviewController::class,'update'])->name('review.update');//nuevo
Route::delete('review/{review}',[ReviewController::class,'destroy'])->name('review.destroy');
Route::get('review/{review}/edit',[ReviewController::class,'edit'])->name('review.edit');


`Route::get('inversionistas/create', [InversionistaController::class, 'create'])->name('inversionistas.create');
Route::post('inversionistas/store', [InversionistaController::class, 'store'])->name('inversionistas.store');
Route::get('inversionistas/listar', [InversionistaController::class, 'index'])->name('inversionistas.index');
Route::delete('inversionistas/{inversionista}', [InversionistaController::class, 'destroy'])->name('inversionistas.destroy');
Route::get('inversionistas/{inversionista}', [InversionistaController::class, 'show'])->name('inversionistas.show');
Route::put('inversionistas/{inversionista}',[InversionistaController::class,'update'])->name('inversionistas.update');
Route::get('inversionistas/{inversionista}/editar',[InversionistaController::class,'edit'])->name('inversionistas.edit');

//conexion (asociar)
Route::get('/interes/asociar', [ConexionController::class, 'asociar'])->name('interes.asociar');
Route::post('/interes/store', [ConexionController::class, 'store'])->name('interes.store');`