<?php

namespace Database\Factories;

use App\Models\navire;
use Illuminate\Database\Eloquent\Factories\Factory;
//use App\Models\Marin;

class equipageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'navire_id'=>$this->faker->numberBetween(1,4),
            'date_debut_membre'=>$this->faker->date(),
            'date_fin_membre'=>$this->faker->date(),

        ];
    }
}
