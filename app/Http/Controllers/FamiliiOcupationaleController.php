<?php

namespace App\Http\Controllers;

use App\Models\FamiliiOcupationale;
use Illuminate\Http\Request;

class FamiliiOcupationaleController extends Controller
{
    public function suspenda(Request $request)
    {

        // Preluare ID trimis
        $idFamiliePentruDezactivat = $request->id;

        // Identificare Familie pentru suspendare
        $familieSuspendata = FamiliiOcupationale::find($idFamiliePentruDezactivat);

        // Schimbare stare regiune
        $familieSuspendata->stare = 0;

        // Salvare modificari efectuate asupra regiuniii
        $familieSuspendata->save();

        return response("Familia a fost suspendata cu succes", 200)->header('Content-Type', 'application/json');
    }

    public function reactiveaza(Request $request)
    {
        // Preluare ID trimis
        $idFamiliePentruReactivat = $request->id;

        // Identificare Regiune pentru suspendare
        $familieReactivata = FamiliiOcupationale::find($idFamiliePentruReactivat);

        // Schimbare stare regiune
        $familieReactivata->stare = 1;

        // Salvare modificari efectuate asupra regiuniii
        $familieReactivata->save();

        return response("Familia a fost reactivata cu succes", 200)->header('Content-Type', 'application/json');
    }
}
