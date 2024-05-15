<?php

namespace App\Http\Controllers;
use App\Models\consultar_lista;
use Illuminate\Http\Request;

class controllerconsultar_lista extends Controller
{
    //
    public function formulario_lista(){

        return view('consultar.consultar_lista');

    }


 public function data_list(Request $request){

        $list = new consultar_lista();
        $list->name_entrepreneur=$request->name_entrepreneur;
        $list->entrepreneur_surname=$request->entrepreneur_surname;
        $list->name_entrepreneurship=$request->name_entrepreneurship;
        $list->surname_investor=$request->surname_investor;
        $list->general_description=$request->general_description;
        $list->save();
        return $list;
    }
/*
  $table->id();
            $table->string('name_entrepreneur');
            $table->string('entrepreneur_surname');
            $table->string('name_entrepreneurship');
            $table->string('surname_investor');
            $table->text('general_description');
            $table->timestamps();
*/


public function listar_lista(){
       
    $lista = consultar_lista::orderBy("id","desc")->get();
    return view("consultar.listar_consulta",compact("lista"));
  }

  public function destroy(consultar_lista $consultar_lista){
     
    // $lista  = lista ::find($id);
    // return $lista ;

    $consultar_lista ->delete();
     return redirect()->route("listar_lista");
     
 }

 public function show(consultar_lista $lista){
     
    // $lista = lista::find($id);
    // return $lista;
     return view('consultar.show_consultarlista', compact('lista'));

 }
}
