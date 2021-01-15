<?php

namespace App\Http\Controllers;

use App\Models\Ordonatori;
use Illuminate\Http\Request;

class OrdonatoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ordonator = new Ordonatori();

        $ordonator->familie                         = $request->familie;
        $ordonator->denumire                        = $request->denumire;
        $ordonator->tip_ordonator                   = $request->tip_ordonator;
        $ordonator->judet                           = $request->judet;
        $ordonator->localitate                      = $request->localitate;
        $ordonator->data_infiintare                 = $request->data_infiintare;
        $ordonator->stare                           = $request->stare;

        if($ordonator->save()){
            return response("Ordonatorul a fost adaugat cu succes", 200)->header('Content-Type', 'application/json');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
