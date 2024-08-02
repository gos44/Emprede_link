<?php

namespace App\Http\Controllers;
use App\Models\Enterprising; 
use App\models\user;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EnterprisingController extends Controller
{

    public function creates()
    {
        return view('emprender.emprendedor');
    }
    
    public function store(Request $request)
    { 
        $enterprising = new Enterprising();
        $enterprising ->name = $request->name;
        $enterprising ->lastname = $request->lastname;
        $enterprising ->fecha_nacimiento = $request->fecha_nacimiento;
        $enterprising ->password = $request->password;
        $enterprising ->telefono = $request->telefono;
        $enterprising ->imagen = $request->imagen;
        $enterprising ->correo = $request->correo;
        $enterprising ->ubicacion = $request->ubicacion;
        $enterprising ->numero = $request->numero;

        $emprendedor = User::all();
       
       
        return view('role_user.asociar',compact('users','roles'));
        $emprendedor->save();

        return redirect()->route('emprendedor.index');
    }

    public function index()
    {
        $emprendedores = Enterprising::all();
        return view('emprender.listar', ['emprendedores' => $emprendedores]);
    }
    
    public function show(Enterprising $emprendedor)
    {
        return view('emprender.show', compact('emprendedor'));
    }

    public function destroy(Enterprising $emprendedor)
    {
        $emprendedor->delete();
        return redirect()->route('emprendedor.index');
    }

    public function edit(Enterprising $emprendedor)
    {
        return view('emprender.edit', compact('emprendedor'));
    }

    public function update(Request $request, Enterprising $emprendedor)
    {
        $emprendedor->name = $request->name;
        $emprendedor->lastname = $request->lastname;
        $emprendedor->fecha_nacimiento = $request->fecha_nacimiento;
        $emprendedor->password = $request->password;
        $emprendedor->telefono = $request->telefono;
        $emprendedor->imagen = $request->imagen;
        $emprendedor->correo = $request->correo;
        $emprendedor->ubicacion = $request->ubicacion;
        $emprendedor->numero = $request->numero;
        $emprendedor->save();
        return redirect()->route('emprendedor.index');
    }
    public function navigation()
    {
        return view('emprender.navigation');
    }

    
}
