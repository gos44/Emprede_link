<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class InvestoreController extends Controller
{
    public function index()
    {
        $investors = Investor::orderBy('id', 'desc')->get();
        return view('registrosL', compact('investors'));
    }

    public function create()
    {
        return view('inversionistaC');
    }

    public function store(Request $request)
    {
        $investor = new Investor();
        $investor->name = $request->name;
        $investor->lastname = $request->lastname;
        $investor->Nacimiento = $request->Nacimiento;
        $investor->telefono = $request->telefono;
        $investor->contraseña = $request->contraseña;
        $investor->correo = $request->correo;
        $investor->ubicacion = $request->ubicacion;

        $investor->save();

        return redirect()->route('investors.index');
    }

    public function destroy(Investor $investor)
    {
        $investor->delete();
        return redirect()->route('investors.index');
    }

    public function show(Investor $investor)
    {
        return view('show', compact('investor'));
    }
    public function edit (investor $investor){

        return view('edit',compact('investor'));

    }
    public function update(Request $request,investor $investor ){
        
        $investor->name = $request->name;
        $investor->lastname = $request->lastname;
        $investor->Nacimiento = $request->Nacimiento;
        $investor->telefono = $request->telefono;
        $investor->contraseña = $request->contraseña;
        $investor->correo = $request->correo;
        $investor->ubicacion = $request->ubicacion;
        $investor->save();
        return redirect()->route('investors.index');

    }
}
