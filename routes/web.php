<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/frlista',[controllerconsultar_lista::class,'formulario_lista']);
Route::post('/data_list',[controllerconsultar_lista::class,'data_list'])->name('data_lista');
Route::get('/listarconsulta', [controllerconsultar_lista::class,'listar_lista'])->name('listar_lista'); 
Route::delete('/{consultar_lista}', [controllerconsultar_lista::class,'destroy'])->name('destroy'); 
Route::post('/consultalist',[controllerconsultar_lista::class,'data_list'])->name('consultar_lista');
Route::get('/{lista}',[controllerconsultar_lista::class,'show'])->name('show_consultarlista');


Route::get('/frlistatodo', [controllerconsultar_todo::class, 'formularioTodo']);
Route::post('/data_todo', [controllerconsultar_todo::class, 'dataTodo'])->name('data_todo');
Route::get('/listar_todo', [controllerconsultar_todo::class, 'listarTodo'])->name('listar_todo'); 
Route::delete('/destroy/{consultar_todo}', [controllerconsultar_todo::class, 'destroy'])->name('destroy'); 
Route::get('/show/{consultar_todo}', [controllerconsultar_todo::class, 'show'])->name('show_consultar_todo');
