<?php

use App\Http\Controllers\OrdonatoriController;

// Import Collections
use App\Http\Resources\JudeteCollection;
use App\Http\Resources\OrdonatoriCollection;
use App\Http\Resources\FamiliiOcupationaleCollection;
use App\Http\Resources\OrdonatoriDeCrediteTipCollection;


// Import Models
use App\Models\Judete;
use App\Models\Ordonatori;
use App\Models\FamiliiOcupationale;
use App\Models\TipOrdonatori;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

// Preluare date Familii Ocupationale
Route::get('/familiiocupationale/all', function(){
    return FamiliiOcupationaleCollection::collection(FamiliiOcupationale::all());
});


//  API_TIP_ORDONATORI
Route::get('/tipordonatoridecredite', function () {
    return OrdonatoriDeCrediteTipCollection::collection(TipOrdonatori::all());
});

