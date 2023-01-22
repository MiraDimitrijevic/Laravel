<?php

namespace App\Http\Controllers;

use App\Models\Termin;
use Illuminate\Http\Request;
use App\Http\Resources\TerminResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class TerminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $termini= Termin::all();
       return TerminResource::collection($termini);
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
        $validator = Validator::make($request->all(), [
            'datum'=>'required|date_format:Y-m-d|after_or_equal:start_date',
            'vreme'=>'date_format:H:i:s|required',
            'frizer_id'=>'required'
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $termin = Termin::create([
            'datum' =>$request->datum,
            'vreme' =>$request->vreme,

            'frizer_id' => $request->frizer_id,
            'user_id' => Auth::user()->id,
        ]);

        return response()->json(['Uspesno ste zakazali termin', new TerminResource($termin)]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function show(Termin $termin)
    {
        return new TerminResource($termin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function edit(Termin $termin)
    {  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Termin $termin)
    {$validator = Validator::make($request->all(), [
        'datum' => 'required|date_format:Y-m-d|after_or_equal:start_date',
        'vreme' => 'required|date_format:H:i:s|after:time_start',
        'frizer_id' => 'required'
    ]);

    if ($validator->fails())
        return response()->json($validator->errors());

    $termin->datum = $request->datum;
    $termin->vreme = $request->vreme;

    $termin->frizer_id = $request->frizer_id;

    $termin->save();

    return response()->json(['Uspesno ste promenili zakazani termin', new TerminResource($termin)]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Termin $termin)
    {
        $termin->delete();
        return response()->json('Termin je uspešno otkazan');
    }

    
}
