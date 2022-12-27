<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Frizer;

class FrizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     * @return void
     */
    public function run()
    {

        Frizer:: truncate();

        $frizer1= new Frizer;
        $frizer1->ime="Marija";
        $frizer1->prezime="Milic";
        $frizer1->opis="musko-zenski frizer";
        $frizer1->save();

        Frizer :: create([

            'ime'=>'Filip',
            'prezime'=>'Radovic',
            'opis'=>'muski frizer'

        
        ]);
    }
}
