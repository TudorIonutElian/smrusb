<?php

namespace App\Http\Controllers;

use App\Models\IstoricRegiuni;
use App\Models\Regiuni;
use Illuminate\Http\Request;

class RegiuniController extends Controller
{
    public function suspenda(Request $request)
    {

        // Preluare ID trimis
         $idRegiunePentruDezactivat = $request->id;

        // Identificare Regiune pentru suspendare
        $regiuneSuspendata = Regiuni::find($idRegiunePentruDezactivat);

        // Schimbare stare regiune
        $regiuneSuspendata->stare = 0;

        // Salvare modificari efectuate asupra regiuniii
        $regiuneSuspendata->save();

        return response("Regiunea a fost suspendata cu succes", 200)->header('Content-Type', 'application/json');
    }

    public function reactiveaza(Request $request)
    {
        // Preluare ID trimis
        $idRegiunePentruDezactivat = $request->id;

        // Identificare Regiune pentru suspendare
        $regiuneSuspendata = Regiuni::find($idRegiunePentruDezactivat);

        // Schimbare stare regiune
        $regiuneSuspendata->stare = 1;

        // Salvare modificari efectuate asupra regiuniii
        $regiuneSuspendata->save();

        return response("Regiunea a fost reactivata cu succes", 200)->header('Content-Type', 'application/json');
    }

    public function istoric()
    {
        return $istoricRegiuni = IstoricRegiuni::orderBy('regiune')->orderBy('tip')->get();
    }


}
