<?php

namespace App\Http\Controllers;
use App\Models\consultar_todo;
use Illuminate\Http\Request;

class controllerconsultar_todo extends Controller
{
    //
    
        public function formularioTodo()
        {
            return view('Consultatodo.formulario_todo');
        }
    
        public function dataTodo(Request $request)
        {
            $list = new consultar_todo();
            $list->name_entrepreneur = $request->name_entrepreneur;
            $list->entrepreneur_surname = $request->entrepreneur_surname;
            $list->name_entrepreneurship = $request->name_entrepreneurship;
            $list->general_description = $request->general_description;
            $list->name_investor = $request->name_investor;
            $list->surname_investor = $request->surname_investor;
            $list->chat = $request->has('chat');
            $list->date = $request->date;
            $list->save();
    
            return redirect()->route('listar_todo');
        }
    
        public function listarTodo()
        {
            $lista = consultar_todo::orderBy("id", "desc")->get();
            return view("Consultatodo.listar_todo", compact("lista"));
        }
    
        public function destroy(consultar_todo $consultar_todo)
        {
            $consultar_todo->delete();
            return redirect()->route("listar_todo");
        }
    
        public function show(consultar_todo $consultar_todo)
        {
            return view('Consultatodo.show_consultar_todo', compact('consultar_todo'));
        }
    }


