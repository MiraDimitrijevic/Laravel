<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Termin;

class FrizerTerminControler extends Controller
{   
    public function index($frizer_id) {
    $termini=Termin::get()->where('frizer_id', $frizer_id);
    if(is_null($termini)) return response()->json("Trazeni korisnik nije zakazao nijedan termin",404);
    else  return response()->json($termini);
       }
}
