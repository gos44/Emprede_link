<?php

namespace App\Http\Controllers;
use App\Models\Enterprice;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EnterpriseController extends Controller
{
    public function creates()
    {
        return view('emprender.emprendimiento');
    }

    public function store(Request $request)
    {
        $emprendimiento = new Enterprice();
        $emprendimiento->nombre_emprendimiento = $request->nombre_emprendimiento;
        $emprendimiento->descripcion = $request->descripcion;
        $emprendimiento->especificaciones = $request->especificaciones;
        $emprendimiento->categoria = $request->categoria;
        $emprendimiento->save();
        return redirect()->route('emprendimientos.index');
    }

    public function index()
    {
        $emprendimientos = Enterprice::all();
        return view('emprender.listar2', ['emprendimientos' => $emprendimientos]);

        
    }

    public function show(Enterprice $emprendimiento)
    {
        return view('emprender.show2', compact('emprendimiento'));
    }

    public function destroy(Enterprice $emprendimiento)
    {
        $emprendimiento->delete();
        return redirect()->route('emprendimientos.index');
    }

    public function edit(Enterprice $emprendimiento)
    {
        return view('emprender.edit2', compact('emprendimiento'));
    }

    public function update(Request $request, Enterprice $emprendimiento)
    {
        $emprendimiento->nombre_emprendimiento = $request->nombre_emprendimiento;
        $emprendimiento->descripcion = $request->descripcion;
        $emprendimiento->especificaciones = $request->especificaciones;
        $emprendimiento->categoria = $request->categoria;
        $emprendimiento->save();
        return redirect()->route('emprendimientos.index');
    }
}
