<?php

// Preluare date Familii Ocupationale
use App\Http\Controllers\FamiliiOcupationaleController;
use App\Http\Resources\FamiliiOcupationaleCollection;
use App\Models\FamiliiOcupationale;

Route::get('/', function(){
    return FamiliiOcupationaleCollection::collection(FamiliiOcupationale::all());
});


// Suspenda Regiune
Route::post('/suspenda', [FamiliiOcupationaleController::class, 'suspenda']);

// Reactiveaza Regiune
Route::post('/reactiveaza', [FamiliiOcupationaleController::class, 'reactiveaza']);

