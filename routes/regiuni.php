<?php

// Importuri necesare
use App\Http\Controllers\RegiuniController;
use App\Http\Resources\RegiuniCollection;
use App\Models\Judete;
use App\Models\Regiuni;


// Preluare toate regiunile
Route::get('/', function () {
    return RegiuniCollection::collection(Regiuni::all());
});


// Preluare localitatile regiunii
Route::get('/{id}/localitati', function($id){
    $listaJudete = [];
    $judete = Judete::where('regiune', $id)->get();

    foreach ($judete as $judet){
        array_push( $listaJudete, $judet->id);
    }

    $localitati = DB::table('localitati')->whereIn('judet', $listaJudete)
        ->join('judete', 'localitati.judet', '=', 'judete.id')
        ->select(
            'localitati.id',
            'localitati.denumire as denumireLocalitate',
            'judete.denumire as denumireJudet')
        ->get();

    return $localitati;
});

// Suspenda Regiune
Route::post('/suspenda', [RegiuniController::class, 'suspenda']);

// Reactiveaza Regiune
Route::post('/reactiveaza', [RegiuniController::class, 'reactiveaza']);

// Reactiveaza Regiune
Route::get('/istoric', [RegiuniController::class, 'istoric']);




