<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultListController;
use App\Http\Controllers\ConsultEverythingController;




Route::get('/frlistatodo', [ConsultEverythingController::class, 'formularioTodo']);
Route::post('/dataTodo', [ConsultEverythingController::class, 'dataTodo'])->name('data_todo');
Route::get('/listartodo', [ConsultEverythingController::class, 'listarTodo'])->name('listar_todo'); 
Route::delete('/destroy/{consultar_todo}', [ConsultEverythingController::class, 'destroy'])->name('destroy_consultartodo'); 
Route::get('show/{consultar_todo}', [ConsultEverythingController::class, 'showtodo'])->name('show_consultar_todo.showtodo');


Route::get('/frlista', [ConsultListController::class, 'formulario_lista']);
Route::post('/data_list', [ConsultListController::class, 'data_list'])->name('data_lista');
Route::get('/listarconsulta', [ConsultListController::class, 'listar_lista'])->name('listar_lista'); 
Route::delete('/destroy/{consultar_lista}', [ConsultListController::class, 'destroy'])->name('destroy'); 
Route::post('/consultalist', [ConsultListController::class, 'data_list'])->name('consultar_lista');
Route::get('/{lista}', [ConsultListController::class, 'show'])->name('show_consultarlista');

