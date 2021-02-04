<?php

// Preluare date Familii Ocupationale
use App\Http\Resources\FamiliiOcupationaleCollection;
use App\Models\FamiliiOcupationale;

Route::get('/all', function(){
    return FamiliiOcupationaleCollection::collection(FamiliiOcupationale::all());
});

