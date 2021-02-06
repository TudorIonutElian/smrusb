<?php

namespace App\Http\Controllers;

use App\Models\Judete;
use Illuminate\Http\Request;

class JudeteController extends Controller{

    public function suspenda(Request $request)
    {
        // Preluare ID trimis
        $idJudetPentruSuspendare = $request->id;

        // Identificare Regiune pentru suspendare
        $judetSuspendare = Judete::find($idJudetPentruSuspendare);

        // Schimbare stare regiune
        $judetSuspendare->stare = 0;

        // Salvare modificari efectuate asupra regiuniii
        $judetSuspendare->save();

        return response("Judetul a fost suspendat cu succes", 200)->header('Content-Type', 'application/json');
    }

    public function reactiveaza(Request $request)
    {
        // Preluare ID trimis
        $idJudetPentruReactivare = $request->id;

        // Identificare Regiune pentru suspendare
        $judetReactivat = Judete::find($idJudetPentruReactivare);

        // Schimbare stare regiune
        $judetReactivat->stare = 1;

        // Salvare modificari efectuate asupra regiuniii
        $judetReactivat->save();

        return response("Judetul a fost reactivat cu succes", 200)->header('Content-Type', 'application/json');
    }

    public function istoric()
    {
        return $istoricJudete = IstoricJudete::orderBy('judet')->orderBy('tip')->get();
    }
}
