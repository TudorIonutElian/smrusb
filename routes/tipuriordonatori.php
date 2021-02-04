<?php

//  API_TIP_ORDONATORI
use App\Http\Resources\OrdonatoriDeCrediteTipCollection;
use App\Models\TipOrdonatori;

Route::get('/', function () {
    return OrdonatoriDeCrediteTipCollection::collection(TipOrdonatori::all());
});
