<?php

//  API_JUDETE
use App\Http\Resources\JudeteCollection;
use App\Models\Judete;

Route::get('/', function () {
    return JudeteCollection::collection(Judete::all());
});
