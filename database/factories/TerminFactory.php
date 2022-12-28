<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TerminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          
            'user_id' => 1,
            'frizer_id' => 1,
            'vreme' =>$this->faker->dateTimeThisMonth()->format('H:i:s')            ,
            'datum' => $this->faker->dateTimeThisMonth()->format('Y-m-d')
            
        ];
    }
}
