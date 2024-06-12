<?php

namespace App\Http\Controllers;
use App\Models\consult_everything;
use Illuminate\Http\Request;

class ConsultEverythingController extends Controller
{
    //
    public function formularioTodo()
    {
        return view('Consultatodo.formulario_todo');
    }
    public function dataTodo(Request $request)
    {
        $listodo = new consult_everything();
        $listodo->name_entrepreneur = $request->name_entrepreneur;
        $listodo->entrepreneur_surname = $request->entrepreneur_surname;
        $listodo->name_entrepreneurship = $request->name_entrepreneurship;
        $listodo->general_description = $request->general_description;
        $listodo->name_investor = $request->name_investor;
        $listodo->surname_investor = $request->surname_investor;
        $listodo->chat = $request->chat;
        $listodo->date = $request->date;
        $listodo->save();
        return  view('Consultatodo.formulario_todo');
    }

    public function listarTodo()
    {
        $listodos = consult_everything::orderBy("id", "desc")->get(); //inde
        return view("Consultatodo.listar_todo", compact("listodos"));
    }

    public function destroy(consult_everything $consultar_todo)
{
    $consultar_todo->delete();
    return redirect()->route('listar_todo');
}
public function showtodo(consult_everything $consultar_todo)
{
    return view('Consultatodo.show_consultar_todo', ['listodo' => $consultar_todo]);
}
}

