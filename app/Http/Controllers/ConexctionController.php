<?php

namespace App\Http\Controllers;
use App\Models\Enterprising;
use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ConectionController extends Controller
{
    public function asociar()
    {
        $enterprisings = Enterprising::all();
        $investors = Investor::all();
        return view('Conection.asociar', compact('', 'investors'));
    }

    public function store(Request $request)
    {

            $enterprisings= Enterprising::find($request->enterprising_id);
            $enterprisings->Investors()->attach($request->inverstor_id);

            return 'Emprendedor e Inversionista asociados correctamente';

    }
}
