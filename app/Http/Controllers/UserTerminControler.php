<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Termin;

class UserTerminControler extends Controller
{
   public function index($user_id) {
$termini=Termin::get()->where('user_id', $user_id);
if(is_null($termini)) return response()->json("Trazeni korisnik nije zakazao nijedan termin",404);
else  return response()->json($termini);
   }
}
