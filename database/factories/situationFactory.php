<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Marin;

class situationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date_debut'=>$this->faker->date(),
            'date_fin'=>$this->faker->date(),
            'marin_id'=> Marin::factory(),
        ];
    }
}
