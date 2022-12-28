<?php

namespace App\Http\Controllers;

use App\Models\Frizer;
use Illuminate\Http\Request;
use App\Http\Resources\FrizerResource;

class FrizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frizeri= Frizer::all();
       return FrizerResource::collection($frizeri);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Rsesponse
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function show(Frizer $frizer)
    {
       return new FrizerResource($frizer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function edit(Frizer $frizer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frizer $frizer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frizer $frizer)
    {
        //
    }
}
