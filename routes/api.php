<?php

// Import Collections
use App\Http\Resources\JudeteCollection;
use App\Http\Resources\OrdonatoriCollection;

// Import Models
use App\Models\Judete;
use App\Models\Ordonatori;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/judete', function () {
    return JudeteCollection::collection(Judete::all());
});

Route::get('/ordonatori', function () {
    return OrdonatoriCollection::collection(Ordonatori::all());
});

