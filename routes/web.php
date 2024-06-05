<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerconsultar_lista;
use App\Http\Controllers\ResenaController;
use App\Http\Controllers\controllerconsultar_todo;





//
Route::get('resena/create',[ResenaController::class,'create']);
Route::post('resenas/store', [ResenaController::class,'store'])->name('resenas.store');
Route::get('resena/listar',[ResenaController::class,'index'])->name('resena.index');
Route::get('resena/{resena}',[ResenaController::class,'show'])->name('resena.show');
Route::put('resena/{resena}',[ResenaController::class,'update'])->name('resena.update');//nuevo
Route::delete('resena/{resena}',[ResenaController::class,'destroy'])->name('resena.destroy');
Route::get('resena/{resena}/editar',[ResenaController::class,'edit'])->name('resena.edit');

Route::get('/frlista',[controllerconsultar_lista::class,'formulario_lista']);
Route::post('/data_list',[controllerconsultar_lista::class,'data_list'])->name('data_lista');
Route::get('/listarconsulta', [controllerconsultar_lista::class,'listar_lista'])->name('listar_lista'); 
Route::delete('/{consultar_lista}', [controllerconsultar_lista::class,'destroy'])->name('destroy'); 
Route::post('/consultalist',[controllerconsultar_lista::class,'data_list'])->name('consultar_lista');
Route::get('/{lista}',[controllerconsultar_lista::class,'show'])->name('show_consultarlista');
