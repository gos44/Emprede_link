<?php

namespace App\Http\Controllers;

use App\Models\Enterprising;
use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ConexctionController extends Controller
{
    public function asociar()
    {
        $enterprisings = Enterprising::all();
        $investors = Investor::all();
        return view('Interes.asociar', compact('enterprisings', 'investors'));
    }

    public function store(Request $request)
    {
        $enterprising = Enterprising::find($request->enterprising_id);
        $enterprising->investors()->attach($request->investors_id);

        return 'Emprendedor e Inversionista asociados correctamente';
    }
}
