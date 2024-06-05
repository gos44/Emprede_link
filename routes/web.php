<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerconsultar_lista;
use App\Http\Controllers\PublicarEmprendimientoController;
use App\Http\Controllers\controllerconsultar_todo;







//plicar_emprendimiento k
Route::get('trabajo/tabla',[PublicarEmprendimientoController::class,'create']);
Route::post('Publicar_Emprendimiento/store', [PublicarEmprendimientoController::class,'store'])->name('Publicar_Emprendimiento.store');
Route::get('trabajo/listar',[PublicarEmprendimientoController::class,'index'])->name('trabajo.index');
Route::get('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'show'])->name('trabajo.show');
Route::put('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'update'])->name('trabajo.update');//nuevo
Route::delete('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'destroy'])->name('trabajo.destroy');
Route::get('trabajo/{trabajo}/editar',[PublicarEmprendimientoController::class,'edit'])->name('trabajo.edit');



Route::get('/frlista',[controllerconsultar_lista::class,'formulario_lista']);
Route::post('/data_list',[controllerconsultar_lista::class,'data_list'])->name('data_lista');
Route::get('/listarconsulta', [controllerconsultar_lista::class,'listar_lista'])->name('listar_lista'); 
Route::delete('/{consultar_lista}', [controllerconsultar_lista::class,'destroy'])->name('destroy'); 
Route::post('/consultalist',[controllerconsultar_lista::class,'data_list'])->name('consultar_lista');
Route::get('/{lista}',[controllerconsultar_lista::class,'show'])->name('show_consultarlista');
