

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnterprisingController;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\ReviewController; 
use App\Http\Controllers\InversionistaController;
use App\Http\Controllers\PublishventureController;
use App\Http\Controllers\ConectionController;



//Emprendedor


Route::get('emprendedor/create', [EnterpriseController::class, 'creates']);
Route::post('emprender/store', [EnterpriseController::class, 'store'])->name('emprender.store');





Route::get('emprendedor/listar', [EnterpriseController::class, 'index'])->name('emprendedor.index');
Route::delete('emprendedor/{emprendedor}', [EnterpriseController::class, 'destroy'])->name('emprendedor.destroy');
Route::get('emprendedor/{emprendedor}', [EnterpriseController::class, 'show'])->name('emprendedor.show');
Route::put('emprendedor/{emprendedor}', [EnterpriseController::class, 'update'])->name('emprendedor.update');
Route::get('emprendedor/{emprendedor}/editar', [EnterpriseController::class, 'edit'])->name('emprendedor.edit');

Route::get('emprendedor/navigation', [EnterpriseController::class, 'navigation'])->name('emprendedor.navigation');

// //emprendimiento
Route::get('emprendimiento/create', [EnterprisingController::class, 'creates']);
Route::post('emprendimiento/store', [EnterprisingController::class, 'store'])->name('emprendimiento.store');
Route::get('emprendimientos/listar2', [EnterprisingController::class, 'index'])->name('emprendimientos.index');
Route::delete('emprendimiento/{emprendimiento}', [EnterprisingController::class, 'destroy'])->name('emprendimiento.destroy');
Route::get('emprendimiento/{emprendimiento}', [EnterprisingController::class, 'show'])->name('emprendimiento.show');
Route::put('emprendimiento/{emprendimiento}', [EnterprisingController::class, 'update'])->name('emprendimiento.update');
Route::get('emprendimiento/{emprendimiento}/editar', [EnterprisingController::class, 'edit'])->name('emprendimiento.edit');


 //plicar_emprendimiento k
Route::get('/trabajo/tabla',[PublishventureController::class,'create']);
 Route::post('Publicar_Emprendimiento/store', [PublishventureController::class,'store'])->name('Publicar_Emprendimiento.store');
 Route::get('trabajo/listar',[PublishventureController::class,'index'])->name('trabajo.index');
Route::get('trabajo/{trabajo}',[PublishventureController::class,'show'])->name('trabajo.show');
Route::put('trabajo/{trabajo}',[PublishventureController::class,'update'])->name('trabajo.update');//nuevo
 Route::delete('trabajo/{trabajo}',[PublishventureController::class,'destroy'])->name('trabajo.destroy');
Route::get('trabajo/{trabajo}/editar',[PublishventureController::class,'edit'])->name('trabajo.edit');

//revies
 Route::get('review/create',[ReviewController::class,'create']);
 Route::post('reviews/store', [ReviewController::class,'store'])->name('reviews.store');
 Route::get('review/listar',[ReviewController::class,'index'])->name('review.index');
Route::get('review/{review}',[ReviewController::class,'show'])->name('review.show');
Route::put('review/{review}',[ReviewController::class,'update'])->name('review.update');//nuevo
Route::delete('review/{review}',[ReviewController::class,'destroy'])->name('review.destroy');
Route::get('review/{review}/edit',[ReviewController::class,'edit'])->name('review.edit');


Route::get('inversionistas/create', [InversionistaController::class, 'create'])->name('inversionistas.create');
Route::post('inversionistas/store', [InversionistaController::class, 'store'])->name('inversionistas.store');
Route::get('inversionistas/listar', [InversionistaController::class, 'index'])->name('inversionistas.index');
Route::delete('inversionistas/{inversionista}', [InversionistaController::class, 'destroy'])->name('inversionistas.destroy');
Route::get('inversionistas/{inversionista}', [InversionistaController::class, 'show'])->name('inversionistas.show');
Route::put('inversionistas/{inversionista}',[InversionistaController::class,'update'])->name('inversionistas.update');
Route::get('inversionistas/{inversionista}/editar',[InversionistaController::class,'edit'])->name('inversionistas.edit');

// //conexion (asociar)
 Route::get('/interes/asociar', [ConectionController::class, 'asociar'])->name('interes.asociar');
 Route::post('/interes/store', [ConectionController::class, 'store'])->name('interes.store');