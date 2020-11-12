<?php

// Import Collections

use App\Http\Resources\InstitutiiCollection;
use App\Http\Resources\JudeteCollection;
use App\Http\Resources\OrdonatoriCollection;
use App\Models\Institutii;

// Import Models
use App\Models\Judete;
use App\Models\Ordonatori;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;
use NunoMaduro\Collision\Adapters\Laravel\Inspector;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API_ORDONATORI

// Preluare toti ordonatorii de credite
Route::get('/ordonatori', function () {
    return OrdonatoriCollection::collection(Ordonatori::all());
});

// Preluare date ordonator unic
Route::get('/ordonatori/{id}', function ($id) {
    $ordonator = DB::table('ordonatori')->where('ordonatori.id', '=', $id)
        ->join('tip_ordonatori', 'ordonatori.tip_ordonator', '=', 'tip_ordonatori.id')
        ->select('ordonatori.id', 'ordonatori.denumire', 'tip_ordonatori.denumire as tip', 'ordonatori.data_infiintare', 'ordonatori.stare')
        ->get();

    $institutii = DB::table('institutii')->where('institutii.ordonator', '=', $id)
        ->join('ordonatori', 'institutii.ordonator', '=', 'ordonatori.id')
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

//API_JUDETE

Route::get('/judete', function () {
    return JudeteCollection::collection(Judete::all());
});
