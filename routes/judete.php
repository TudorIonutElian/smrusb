<?php

//  API_JUDETE
use App\Http\Controllers\JudeteController;
use App\Http\Resources\JudeteCollection;
use App\Models\Judete;

Route::get('/', function () {
    return JudeteCollection::collection(Judete::all());
});

// Suspenda Judet
Route::post('/suspenda', [JudeteController::class, 'suspenda']);

// Reactiveaza Judet
Route::post('/reactiveaza', [JudeteController::class, 'reactiveaza']);
