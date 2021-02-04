<?php


use App\Http\Controllers\OrdonatoriController;
use App\Http\Resources\OrdonatoriCollection;
use App\Models\Ordonatori;

/*
|--------------------------------------------------------------------------
| GET Routes
|--------------------------------------------------------------------------
|
*/

// Preluare toti ordonatorii de credite
Route::get('/', function () {

    return OrdonatoriCollection::collection(Ordonatori::all());
});

// Preluare date ordonator unic
Route::get('/{id}', function ($id) {
    $ordonator = DB::table('ordonatori')->where('ordonatori.id', '=', $id)
        ->join('tip_ordonatori', 'ordonatori.tip_ordonator', '=', 'tip_ordonatori.id')
        ->join('posturi_aprobate', 'posturi_aprobate.ordonator_id', '=', 'ordonatori.id')
        ->select(
            'ordonatori.id',
            'ordonatori.denumire',
            'tip_ordonatori.denumire as tip',
            'ordonatori.data_infiintare',
            'ordonatori.stare',
            'posturi_aprobate.total'
        )->get();

    $institutii = DB::table('institutii')->where('institutii.ordonator_principal', '=', $id)
        ->join('ordonatori', 'institutii.ordonator_principal', '=', 'ordonatori.id')
        ->join('tip_institutii', 'institutii.tip_institutie', '=', 'tip_institutii.id')
        ->join('judete', 'institutii.judet', '=', 'judete.id')
        ->join('localitati', 'institutii.localitate', '=', 'localitati.id')
        ->select(
            'institutii.id',
            'institutii.denumire',
            'tip_institutii.denumire as TipInstitutie',
            'ordonatori.denumire as DenumireOrdonator',
            'judete.denumire as Judet',
            'localitati.denumire as Localitate',
            'institutii.stare')
        ->get();

    return  [
        'ordonator'         => $ordonator,
        'institutii'        => $institutii
    ];
});

/*
|--------------------------------------------------------------------------
| POST Routes
|--------------------------------------------------------------------------
|
*/

// Adaugare ordonator de credite
Route::post('/creare', [OrdonatoriController::class, 'store']);
