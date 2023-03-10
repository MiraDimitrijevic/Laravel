<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Termin;
use Database\Factories\TerminFactory;


class TerminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Termin:: truncate();
        Termin::factory(3)->create();
    }
}
